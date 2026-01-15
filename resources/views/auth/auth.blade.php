@extends('auth.app')
@section('title', Route::is('login') ? 'Sleepy Panda - LOGIN' : 'Sleepy Panda - REGISTER')
@section('content')
    <div class="title mb-2">
        {{ Route::is('login') ? '
        Masuk menggunakan akun yang
        sudah kamu daftarkan' : '
        Daftar menggunakan email yang valid' }}
    </div>
    <div id="alert-container">
        @if(session('error') || $errors->any())
            <div class="alert alert-success p-2 small mb-3">
                {{ session('error') ?? $errors->first('error') }}
            </div>
        @endif
    </div>
    <form id="authForm" action="{{ Route::is('login') ? route('vlogin') : route('vregist') }}" method="POST">
        @csrf
        <div id="initial-inputs">
            <div class="input-group">
                <i class="bi bi-envelope"></i> 
                <input type="email" placeholder="Email" name="email" id="email" required>
            </div>
            <div class="input-group">
                <i class="bi bi-lock"></i>
                <input type="password" placeholder="Password" name="password" id="password" required>
            </div>
            @if(Route::is('login'))
                <div class="fontlink t-vlow text-end mb-5" id="btnForgotPass">Lupa password?</div>
                <div id="overlay" class="d-none"></div>
            @endif
        </div>
        <div id="otp-inputs" style="display: none;">
            <div class="alert alert-success p-2 small mb-3">Kode verifikasi telah dikirim ke email Anda.</div>
            <div class="input-group mb-4">
                <i class="bi bi-shield-lock"></i>
                <input type="text" placeholder="Masukkan Kode Verifikasi" name="otp_code" id="otp_code">
            </div>
        </div>
        <div id="new-password-inputs" style="display: none;">
            <div class="alert alert-info p-2 small mb-3">Silakan buat password baru anda.</div>
            <div class="input-group mb-3">
                <i class="bi bi-key"></i>
                <input type="password" placeholder="Password Baru" id="new_password">
            </div>
        </div>
        <div class="mt-4">
            <button type="submit" class="button1" id="btn-submit">
                {{ Route::is('login') ? 'Masuk' : 'Daftar' }}
            </button>
            <button type="button" class="button1" id="btn-verify" style="display: none;" onclick="verifyOtp()">
                Verifikasi Akun
            </button>
            @if(Route::is('login'))
                <p class="t-vlow fw-normal mt-1" id="reg-link">
                    Belum memiliki akun? <a href="{{ route('register') }}" class="fontlink">Daftar sekarang</a>
                </p>
            @else
                <p class="t-vlow fw-normal mt-1" id="login-link">
                    Sudah punya akun? <a href="{{ route('login') }}" class="fontlink">Masuk</a>
                </p>
            @endif
        </div>
    </form>
@endsection