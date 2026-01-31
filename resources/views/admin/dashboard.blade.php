
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard – Control Panel</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
  background:#0f172a;
  color:#e5e7eb;
  font-family: Inter, system-ui, sans-serif;
}

/* Sidebar */
.sidebar{
  width:240px;
  min-height:100vh;
  background:#020617;
  border-right:1px solid rgba(148,163,184,.15);
  position:fixed;
  top:0;
  left:0;
  padding:20px;
}

.sidebar h5{
  font-weight:600;
  margin-bottom:30px;
}

.sidebar a{
  display:flex;
  align-items:center;
  gap:10px;
  color:#94a3b8;
  text-decoration:none;
  padding:10px 14px;
  border-radius:10px;
  margin-bottom:6px;
  transition:.25s;
}

.sidebar a:hover,
.sidebar a.active{
  background:rgba(99,102,241,.15);
  color:#fff;
}

/* Main */
.main{
  margin-left:240px;
  padding:24px;
}

/* Topbar */
.topbar{
  background:rgba(2,6,23,.6);
  border:1px solid rgba(148,163,184,.15);
  border-radius:16px;
  padding:14px 20px;
  margin-bottom:24px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}

/* Cards */
.stat-card{
  background:linear-gradient(180deg,rgba(255,255,255,.06),rgba(255,255,255,.02));
  border:1px solid rgba(148,163,184,.18);
  border-radius:18px;
  padding:20px;
  box-shadow:0 20px 40px rgba(0,0,0,.4);
}

.stat-card i{
  font-size:28px;
  background:linear-gradient(135deg,#6366f1,#22c55e);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

/* Table */
.table{
  color:#e5e7eb;
}
.table thead{
  color:#94a3b8;
}
.table tr{
  border-color:rgba(148,163,184,.15);
}

/* Responsive */
@media(max-width:768px){
  .sidebar{
    position:static;
    width:100%;
    min-height:auto;
  }
  .main{
    margin-left:0;
  }
}
/* Mobile Responsive */
@media (max-width: 768px) {

  .sidebar{
    position:fixed;
    left:-260px;
    top:0;
    width:240px;
    height:100vh;
    z-index:999;
    transition:.3s ease;
  }

  .sidebar.show{
    left:0;
  }

  .main{
    margin-left:0;
  }

  .overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.6);
    z-index:998;
    display:none;
  }

  .overlay.show{
    display:block;
  }
}

</style>
</head>

<body>
<div class="overlay" id="overlay"></div>
<div class="container">
    <button class="btn btn-sm btn-outline-light d-md-none mt-3" id="menuBtn">
    <i class="bi bi-list"></i>
</button>
</div>
<!-- SIDEBAR -->
<div class="sidebar">
  <h5>Admin Panel</h5>

  


  <a href="#" class="active">
    @if(auth()->user()->role === 'admin')
      <a href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
    @else
        <a href="{{ route('user.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
    @endif

  </a>
  <a href="#">
    <i class="bi bi-folder"></i> Projects
  </a>
  <a href="#">
    <i class="bi bi-person"></i> Profile
  </a>
  <a href="#">
    <i class="bi bi-envelope"></i> Messages
  </a>
  <a href="#">
    <i class="bi bi-gear"></i> Settings
  </a>
  <a href="">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-link text-start text-white p-0" style="text-decoration: none;">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </button>
    </form>
  </a>
</div>

<!-- MAIN -->
<div class="main">

  <!-- TOP BAR -->
  <div class="topbar">
    <div>
      <h5 class="mb-0">Dashboard</h5>
      <small class="text-white">Welcome back, Reduan</small>
    </div>
    <img src="https://i.pravatar.cc/40" class="rounded-circle">
  </div>

  <!-- STATS -->
  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-folder"></i>
        <h4 class="mt-3">12</h4>
        <p class="small text-muted mb-0">Total Projects</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-envelope"></i>
        <h4 class="mt-3">8</h4>
        <p class="small text-muted mb-0">New Messages</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-card">
        <i class="bi bi-people"></i>
        <h4 class="mt-3">5</h4>
        <p class="small text-muted mb-0">Clients</p>
      </div>
    </div>
  </div>

  <!-- TABLE -->
  <div class="stat-card">
    <h6 class="mb-3">Recent Messages</h6>

    <div class="table-responsive">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>john@email.com</td>
            <td>Need a portfolio website</td>
            <td>Today</td>
          </tr>
          <tr>
            <td>Sarah</td>
            <td>sarah@email.com</td>
            <td>Interested in freelance work</td>
            <td>Yesterday</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const menuBtn = document.getElementById("menuBtn");
    const sidebar = document.querySelector(".sidebar");
    const overlay = document.getElementById("overlay");

    menuBtn.onclick = () => {
    sidebar.classList.add("show");
    overlay.classList.add("show");
    };

    overlay.onclick = () => {
    sidebar.classList.remove("show");
    overlay.classList.remove("show");
    };
</script>

</body>
</html>
