<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin App</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @can('only_verify')
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/posts">
            <i class="far fa-newspaper"></i>
            <span>Article</span></a>
    </li>

    
    
    {{-- Hanya bisa diakses oleh admin dengan gate autorization laravel --}}
    @can('only_admin')
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/categories">
            <i class="fas fa-list"></i>
            <span>Category</span></a>
    </li>
            
    @endcan
    
    <!-- Divider -->
    @endcan
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Setting
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/myprofile">
            <i class="fas fa-user-cog"></i>
            <span>Profil</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->