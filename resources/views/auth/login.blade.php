<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Ultra Premium</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background:
    radial-gradient(circle at 20% 10%, rgba(99,102,241,.18), transparent 40%),
    radial-gradient(circle at 80% 30%, rgba(34,197,94,.15), transparent 45%),
    linear-gradient(135deg,#020617,#0f172a);
  font-family: Inter, system-ui, sans-serif;
  color:#e5e7eb;
}

/* Login Card */
.login-box{
  width:100%;
  max-width:420px;
  background:linear-gradient(180deg,rgba(255,255,255,.06),rgba(255,255,255,.02));
  border:1px solid rgba(148,163,184,.18);
  border-radius:22px;
  padding:36px 32px;
  box-shadow:
    0 30px 80px rgba(0,0,0,.6),
    inset 0 1px 0 rgba(255,255,255,.05);
  backdrop-filter: blur(18px);
}

/* Logo */
.brand{
  text-align:center;
  margin-bottom:28px;
}
.brand i{
  font-size:42px;
  background:linear-gradient(135deg,#6366f1,#22c55e);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.brand h4{
  margin-top:10px;
  font-weight:600;
}

/* Inputs */
.form-control{
  background:rgba(2,6,23,.6);
  border:1px solid rgba(148,163,184,.25);
  color:#fff;
  padding:11px 14px;
}
.form-control::placeholder{
  color:#94a3b8;
}
.form-control:focus{
  background:rgba(2,6,23,.8);
  border-color:#6366f1;
  box-shadow:0 0 0 2px rgba(99,102,241,.25);
  color:#fff;
}

/* Input icon */
.input-group-text{
  background:rgba(2,6,23,.6);
  border:1px solid rgba(148,163,184,.25);
  color:#94a3b8;
}

/* Button */
.btn-login{
  width:100%;
  background:linear-gradient(135deg,#2563eb,#6366f1);
  border:none;
  border-radius:999px;
  padding:11px;
  font-weight:500;
  box-shadow:0 15px 35px rgba(99,102,241,.45);
}
.btn-login:hover{
  transform:translateY(-1px);
}

/* Links */
.link{
  color:#94a3b8;
  text-decoration:none;
  font-size:13px;
}
.link:hover{
  color:#fff;
}

/* Divider */
.divider{
  display:flex;
  align-items:center;
  gap:12px;
  color:#94a3b8;
  font-size:13px;
  margin:22px 0;
}
.divider::before,
.divider::after{
  content:"";
  flex:1;
  height:1px;
  background:rgba(148,163,184,.25);
}

/* Social login */
.social-login a{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  width:44px;
  height:44px;
  border-radius:50%;
  background:rgba(148,163,184,.12);
  color:#fff;
  transition:.25s;
}
.social-login a:hover{
  background:#6366f1;
}

footer{
  margin-top:26px;
  text-align:center;
  font-size:12px;
  color:#94a3b8;
}
</style>
</head>

<body>

<div class="login-box">

  <div class="brand">
    <i class="bi bi-shield-lock"></i>
    <h4>Welcome Back</h4>
    <p class="small text-muted">Login to continue</p>
  </div>

  <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
      <input type="email" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}">
    </div>
    <div class="input-group" style="margin-top: -13px">
        @error('email')
            <strong class="">{{ $message }}</strong>
        @enderror
    </div>

    <div class="input-group mb-2 mt-2">
      <span class="input-group-text"><i class="bi bi-lock"></i></span>
      <input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
    </div>
    <div class="input-group" style="margin-top: -13px">
        @error('password')
            <strong class="">{{ $message }}</strong>
        @enderror
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="remember">
        <label class="form-check-label small" for="remember">Remember me</label>
      </div>
      <a href="#" class="link">Forgot password?</a>
    </div>

    <button type="submit" class="btn btn-login">Login</button>
  </form>

  <div class="divider">OR</div>

  <div class="social-login d-flex justify-content-center gap-3">
    <a href="#"><i class="bi bi-google"></i></a>
    <a href="#"><i class="bi bi-github"></i></a>
    <a href="#"><i class="bi bi-linkedin"></i></a>
  </div>

  <footer>
    © 2026 Designed by Reduan ( Bit Birds Solution )
  </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


