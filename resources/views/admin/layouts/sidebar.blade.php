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