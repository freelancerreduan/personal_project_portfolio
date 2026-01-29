<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #020617, #0f172a);
            color: #e5e7eb;
            font-family: Inter, system-ui, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background: rgba(2, 6, 23, .8);
            backdrop-filter: blur(14px);
            min-height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            color: #94a3b8;
            padding: 10px 14px;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 6px;
            cursor: pointer;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background: rgba(99, 102, 241, .2);
            color: #fff;
        }

        /* Main */
        .main {
            margin-left: 260px;
            padding: 30px;
        }

        /* Cards */
        .card-ui {
            background: linear-gradient(180deg, rgba(255, 255, 255, .05), rgba(255, 255, 255, .02));
            border: 1px solid rgba(148, 163, 184, .2);
            border-radius: 18px;
            padding: 18px;
        }

        /* Project */
        .project-card img {
            width: 100%;
            border-radius: 14px;
        }

        .tag {
            background: rgba(148, 163, 184, .2);
            padding: 4px 12px;
            border-radius: 999px;
            font-size: 12px;
            margin-right: 6px;
        }

        /* Button */
        .btn-main {
            background: linear-gradient(135deg, #2563eb, #6366f1);
            color: #fff;
            border: none;
            border-radius: 999px;
            padding: 6px 16px;
        }

        /* Sections */
        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        /* Mobile */
        @media(max-width:768px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h5 class="mb-4">👤 User Panel</h5>

        <a class="active" onclick="showSection('dashboard',this)">
            <i class="bi bi-grid me-2"></i> Dashboard
        </a>

        <a onclick="showSection('myProjects',this)">
            <i class="bi bi-bag-check me-2"></i> My Projects
        </a>

        <a onclick="showSection('allProjects',this)">
            <i class="bi bi-box me-2"></i> All Projects
        </a>

        <a onclick="showSection('transactions',this)">
            <i class="bi bi-receipt me-2"></i> Transactions
        </a>

        <a onclick="showSection('profile',this)">
            <i class="bi bi-person me-2"></i> Profile
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

        <!-- DASHBOARD -->
        <div id="dashboard" class="section active">
            <div class="card-ui mb-4">
                <h5>Welcome, Reduan 👋</h5>
                <p class="small text-white mb-0">reduan@example.com</p>
            </div>
        </div>

        <!-- MY PROJECTS -->
        <div id="myProjects" class="section">
            <h5 class="mb-3">My Purchased Projects</h5>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-ui project-card">
                        <img
                            src="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png">
                        <h6 class="mt-3">School Management System</h6>
                        <span class="tag">Laravel</span>
                        <span class="tag">Bootstrap</span>
                        <div class="mt-3 d-flex gap-2">
                            <button class="btn btn-main btn-sm">Download</button>
                            <button class="btn btn-outline-light btn-sm">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ALL PROJECTS -->
        <div id="allProjects" class="section">
            <h5 class="mb-3">All Projects</h5>

            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card-ui project-card">
                        <img
                            src="https://cdn.dribbble.com/userupload/21298393/file/original-8c12f6c028b27eb8b9b63a21e4fc6e6e.png">
                        <h6 class="mt-3">Portfolio Website</h6>
                        <button class="btn btn-main btn-sm mt-2">View Project</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- TRANSACTIONS -->
        <div id="transactions" class="section">
            <h5 class="mb-3">Transaction History</h5>

            <div class="card-ui">
                <table class="table table-dark table-borderless mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Project</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>School Management</td>
                            <td>$25</td>
                            <td>2026-01-10</td>
                            <td><span class="badge bg-success">Paid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- PROFILE -->
        <div id="profile" class="section">
            <h5 class="mb-4">My Profile</h5>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card-ui text-center">
                        <img src="https://i.pravatar.cc/200" class="rounded-circle mb-3"
                            style="width:120px;height:120px;object-fit:cover;border:3px solid #6366f1;">
                        <h6>Reduan Hossen</h6>
                        <p class="small">Web Developer</p>
                        <button class="btn btn-main btn-sm">Edit Profile</button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card-ui">
                        <h6 class="mb-3">Profile Information</h6>

                        <p><b>Full Name:</b> Reduan Hossen</p>
                        <p class="text-white"><b>Email:</b> reduan@example.com</p>
                        <p><b>Account:</b> Premium User</p>
                        <p><b>Joined:</b> January 2026</p>
                        <p><b>Status:</b> <span class="badge bg-success">Active</span></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function showSection(id, el) {
            document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
            document.getElementById(id).classList.add('active');

            document.querySelectorAll('.sidebar a').forEach(a => a.classList.remove('active'));
            el.classList.add('active');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
