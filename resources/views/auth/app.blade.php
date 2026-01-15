<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sleepy Panda')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="phone-frame">
        <div class="auth-card d-flex flex-column align-items-center justify-content-between p-4">
            @if (Route::is('splash'))
                <div class="logo-container mt-5 text-center">
                    <img src="{{ asset('images/ico.png') }}" alt="Logo" class="w-25 mb-2">
                    <br>
                    <img src="{{ asset('images/text.png') }}" alt="Sleepy Panda" class="ltext">
                </div>

                <div class="action-container w-100 mb-4">
                    <div class="title text-center text-white mb-4" style="font-size: 0.9rem; opacity: 0.9;">
                        Mulai dengan masuk atau <br>
                        mendaftar untuk melihat analisa <br>
                        tidur mu.
                    </div>

                    <div class="d-grid gap-3">
                        <a href="{{ route('login') }}">
                            <button class="button1">Masuk</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button class="button2">Register</button>
                        </a>
                    </div>
                </div>
            @else
                <div class="w-100">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/ico.png') }}" alt="" class="w-25">
                    </div>
                    @yield('content')
                </div>
            @endif
        </div>
        @if(Route::is('login'))
            <div id="forgotSheet" class="bottom-sheet">
                <div class="sheet-content">
                    <div class="sheet-handle"></div>
                    <h3 class="text-white mt-3">Lupa password?</h3>
                    <p class="text-white text-small mb-4">
                        Instruksi untuk melakukan reset password akan dikirim melalui email yang kamu gunakan untuk mendaftar.
                    </p>
                    <form id="forgotForm">
                        <div class="input-group mb-3">
                            <i class="bi bi-envelope"></i> 
                            <input type="email" id="forgot_email" placeholder="Masukkan Email Kamu" required class="form-control-custom">
                        </div>
                        <button type="submit" id="btnSendOtp" class="btn btn-success w-100 py-2">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        @else
        @endif
    </div>
    <script>
        let currentSection = '';
        const authForm = document.getElementById('authForm');
        if (authForm) {
            authForm.addEventListener('submit', function(e) {
                let isRegister = "{{ Route::is('register') ? 'true' : 'false' }}";
                if (isRegister === 'false') return;
                e.preventDefault();
                let btn = document.getElementById('btn-submit');
                let originalText = btn.innerText;
                btn.innerText = "Loading...";
                btn.disabled = true;
                let formData = new FormData(this);
                fetch("{{ route('vregist') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status) {
                        let alertContainer = document.getElementById('alert-container'); 
                        if(alertContainer) alertContainer.style.display = 'none';
                        document.getElementById('initial-inputs').style.display = 'none';
                        document.getElementById('login-link').style.display = 'none';
                        document.getElementById('btn-submit').style.display = 'none';
                        document.getElementById('otp-inputs').style.display = 'block';
                        document.getElementById('btn-verify').style.display = 'block';
                        currentSection = 'register';
                        localStorage.setItem('temp_email', document.getElementById('email').value);
                    } else {
                        alert(data.message);
                        btn.innerText = originalText;
                        btn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Terjadi kesalahan sistem");
                    btn.innerText = originalText;
                    btn.disabled = false;
                });
            });
        }
        document.addEventListener('DOMContentLoaded', function() {
            const btnForgot = document.getElementById('btnForgotPass');
            const sheet = document.getElementById('forgotSheet');
            const overlay = document.getElementById('overlay');
            const forgotForm = document.getElementById('forgotForm');
            if (btnForgot && sheet && overlay && forgotForm) {
                btnForgot.addEventListener('click', function() {
                    sheet.classList.add('active');
                    overlay.classList.remove('d-none');
                });
                overlay.addEventListener('click', function() {
                    sheet.classList.remove('active');
                    overlay.classList.add('d-none');
                });
                forgotForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const emailVal = document.getElementById('forgot_email').value;
                    const btn = document.getElementById('btnSendOtp');
                    btn.innerHTML = 'Mengirim...';
                    btn.disabled = true;
                    fetch("{{ route('resetpass') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ email: emailVal })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status) {
                            let alertContainer = document.getElementById('alert-container');
                            if(alertContainer) alertContainer.style.display = 'none';
                            sheet.classList.remove('active');
                            overlay.classList.add('d-none');
                            document.getElementById('reg-link').style.display = 'none';
                            document.getElementById('initial-inputs').style.display = 'none';
                            document.getElementById('btn-submit').style.display = 'none';
                            document.getElementById('otp-inputs').style.display = 'block';
                            document.getElementById('btn-verify').style.display = 'block';
                            currentSection = 'reset';
                            localStorage.setItem('temp_email', emailVal);
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan sistem.');
                    })
                    .finally(() => {
                        btn.innerHTML = 'Reset Password';
                        btn.disabled = false;
                    });
                });
            }
            const msg = localStorage.getItem('auth_message');
            if (msg) {
                const alertContainer = document.getElementById('alert-container');
                if (alertContainer) {
                    alertContainer.innerHTML = `
                        <div class="alert alert-success p-2 small mb-3">
                            ${msg}
                        </div>
                    `;
                }
                localStorage.removeItem('auth_message');
            }
        });
        function verifyOtp() {
            let btn = document.getElementById('btn-verify');
            let otp = document.getElementById('otp_code').value;
            let email = localStorage.getItem('temp_email');
            if (!email || !currentSection) {
                alert("Sesi tidak valid, silakan ulangi proses.");
                location.reload();
                return;
            }
            fetch("{{ route('verify.otp') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({ 
                    email: email, 
                    otp: otp,
                    section: currentSection 
                })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status) {
                    localStorage.setItem('auth_message', data.message);
                    if (data.section === "register") {
                        window.location.href = "/login";
                    } else {    
                        document.getElementById('reg-link').style.display = 'none';
                        document.getElementById('otp-inputs').style.display = 'none';
                        document.getElementById('new-password-inputs').style.display = 'block';
                        btn.innerHTML = "Simpan Password Baru";
                        btn.onclick = function() { submitNewPassword(); };
                    }
                } else {
                    alert(data.message || 'Kode OTP Salah!');
                }
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan koneksi.");
            });
        }
        function submitNewPassword() {
            let pass = document.getElementById('new_password').value;
            let email = localStorage.getItem('temp_email');
            if(pass.length < 8) {
                alert("Password minimal 8 karakter!"); return;
            }
            let btn = document.getElementById('btn-verify');
            btn.innerHTML = "Menyimpan...";
            btn.disabled = true;
            fetch("{{ route('update.password.reset') }}", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({ email: email, password: pass })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status) {
                    localStorage.setItem('auth_message', 'Password berhasil diubah! Silakan masuk.');
                    window.location.href = "/login";
                } else {
                    alert(data.message);
                    btn.disabled = false;
                    btn.innerHTML = "Simpan Password Baru";
                }
            })
            .catch(err => {
                console.error(err);
                alert("Terjadi kesalahan.");
                btn.disabled = false;
            });
        }
    </script>
</body>
</html>