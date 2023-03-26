<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">MyBlog</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ $page == 'Home' ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ $page == 'Blog' ? 'active' : '' }}">
        <a class="nav-link" href="/blog">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Blogs</span></a>
    </li>

    <li class="nav-item {{ $page == 'Users' ? 'active' : '' }}">
        <a class="nav-link" href="/users">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item {{ $page == 'Category' ? 'active' : '' }}">
        <a class="nav-link" href="/categories">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Categories</span></a>
    </li>

    <li class="nav-item {{ $page == 'Profile' ? 'active' : '' }}">
        <a class="nav-link" href="/profile/blog">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>
</ul>
<!-- End of Sidebar -->
