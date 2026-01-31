
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