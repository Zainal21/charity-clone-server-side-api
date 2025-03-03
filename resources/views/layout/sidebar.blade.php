<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar" >
  <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3 text-black"><Strong>Charity Admin</Strong></div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
  <a class="nav-link" href="{{url('/admin')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Master Data
  </div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link collapsed" href="{{url('/users')}}">
      <i class="fas fa-fw fa-cog"></i>
      <span>User</span>
    </a>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
  <a class="nav-link collapsed" href="{{url('/causes')}}">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Cause</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    General
  </div>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
  <a class="nav-link" href="{{url('/donations')}}">
      <i class="fas fa-fw fa-table"></i>
      <span>Donation</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->