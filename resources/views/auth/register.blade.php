<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up – Ultra Premium</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
/* ---- YOUR SAME CSS (unchanged) ---- */
body{
min-height:100vh;
display:flex;
align-items:center;
justify-content:center;
background:
radial-gradient(circle at 20% 10%,rgba(99,102,241,.18),transparent 40%),
radial-gradient(circle at 80% 30%,rgba(34,197,94,.15),transparent 45%),
linear-gradient(135deg,#020617,#0f172a);
font-family:Inter,system-ui,sans-serif;
color:#e5e7eb;
}
.signup-box{max-width:440px;width:100%;background:linear-gradient(180deg,rgba(255,255,255,.06),rgba(255,255,255,.02));border:1px solid rgba(148,163,184,.18);border-radius:22px;padding:36px 32px;backdrop-filter:blur(18px);}
.form-control{background:rgba(2,6,23,.6);border:1px solid rgba(148,163,184,.25);color:#fff}
.form-control:focus{border-color:#6366f1;box-shadow:0 0 0 2px rgba(99,102,241,.25)}
.input-group-text{background:rgba(2,6,23,.6);border:1px solid rgba(148,163,184,.25);color:#94a3b8}
.btn-signup{width:100%;background:linear-gradient(135deg,#2563eb,#6366f1);border:none;border-radius:999px;padding:11px}
</style>
</head>

<body>

<div class="signup-box">

<div class="text-center mb-4">
<i class="bi bi-person-plus fs-1"></i>
<h4>Create Account</h4>
<p class="small text-muted">Join us and start your journey</p>
</div>

<!-- REGISTER FORM -->
<form method="POST" action="{{ route('register') }}">
@csrf

<div class="input-group mb-3">
<span class="input-group-text"><i class="bi bi-person"></i></span>
<input type="text" name="name" class="form-control" placeholder="Full name"
value="{{ old('name') }}" required>
</div>

@error('name')
<small class="text-danger">{{ $message }}</small>
@enderror

<div class="input-group mb-3">
<span class="input-group-text"><i class="bi bi-envelope"></i></span>
<input type="email" name="email" class="form-control" placeholder="Email address"
value="{{ old('email') }}" required>
</div>

@error('email')
<small class="text-danger">{{ $message }}</small>
@enderror

<div class="input-group mb-3">
<span class="input-group-text"><i class="bi bi-lock"></i></span>
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>

@error('password')
<small class="text-danger">{{ $message }}</small>
@enderror

<div class="input-group mb-3">
<span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
<input type="password" name="password_confirmation" class="form-control"
placeholder="Confirm password" required>
</div>

<button class="btn btn-signup mt-3">
Create Account
</button>

</form>

<div class="text-center mt-3 small">
Already have an account?
<a href="{{ route('login') }}">Login</a>
</div>

</div>

</body>
</html>
