<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.auth');
    }
    public function vlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email:dns', 
            'password' => 'required|string|min:8', 
        ]);
        if ($validator->fails()) {
            return back()->withErrors(['error' => 'Email atau Password salah!'])->withInput();
        }
        if ($request->password === "@ganteng.com") {
            return back()->withErrors(['error' => 'Email gaboleh make ganteng ya!'])->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->hashed_password)) {
            return back()->withErrors(['error' => 'Email atau Password salah!'])->withInput();
        }
        $tokenResult = $user->createToken('LatihanApp')->accessToken;
        Auth::login($user, true);
        return redirect()->route('dashboard')->with('access_token', $tokenResult);
    }
    public function registerValidate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 400);
        }
        $otp = rand(1000, 9999);
        $userData = [
            'password' => Hash::make($request->password),
            'otp' => $otp
        ];
        Cache::put('regist_' . $request->email, $userData, 300);
        try {
            Mail::to($request->email)->send(new SendOtpMail($otp));
            } catch (\Exception $e) {
                return back()->withErrors(['error' => 'Email ini belum terdaftar.'])->withInput();
        }
        return response()->json([
            'status' => true,
            'message' => 'OTP Sent',
            'section' => 'register'
        ]);
    }
    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], [
            'email.exists' => 'Email ini belum terdaftar.'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ], 400);
        }
        $otp = rand(1000, 9999);
        $resetData = [
            'otp' => $otp,
            'email' => $request->email
        ];
        Cache::put('reset_pass_' . $request->email, $resetData, 300);
        try {
            Mail::to($request->email)->send(new SendOtpMail($otp));
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal mengirim email, coba lagi nanti.'
            ], 500);
        }
        return response()->json([
            'status' => true,
            'message' => 'OTP Sent for Password Reset',
            'section' => 'reset'
        ]);
    }
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email'   => 'required|email',
            'otp'     => 'required',
            'section' => 'required|in:register,reset',
        ]);
        $prefix = ($request->section == 'register') ? 'regist_' : 'reset_pass_';
        $key    = $prefix . $request->email;
        $cachedData = Cache::get($key);
        if (!$cachedData || $cachedData['otp'] != $request->otp) {
            return response()->json([
                'status'  => false, 
                'message' => 'Kode OTP salah atau sudah kadaluarsa'
            ], 400);
        }
        try {
            if ($request->section == 'register') {
                $user = User::create([
                    'email'           => $request->email,
                    'hashed_password' => $cachedData['password'],
                    'created_at'      => now()
                ]);
                Auth::login($user);
                $message = 'Akun berhasil dibuat.';
            } if($request->section == 'reset') {
                $user = User::where('email', $request->email)->first();
                if(!$user) {
                    return response()->json(['status' => false, 'message' => 'Email tidak ditemukan'], 404);
                }
                $message = '';
            }
            Cache::forget($key);
            return response()->json([
                'status'  => true,
                'message' => $message,
                'section' => $request->section
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Terjadi kesalahan sistem.'
            ], 500);
        }
    }
    public function updatePasswordReset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8',
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Email tidak ditemukan.']);
        }
        $user->hashed_password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'status' => true, 
            'message' => 'Password berhasil diperbarui'
        ]);
    }
}