@extends('admin.layouts.header')
@extends('admin.layouts.sidebar')

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
  @yield('admin-content')
  @extends('admin.layouts.table')
  @extends('admin.layouts.footer')

