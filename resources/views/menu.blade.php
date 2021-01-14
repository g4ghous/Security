@section('menu')

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
        <div class="sidebar-brand-icon ">
            <!-- <i class="fa fa-smile-o"></i> -->
            <img style="width:60px;" src="http://airbornsecurity.pk/public/images/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">Air-Born Security</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <div class="sidebar-heading">
        Registration
    </div>
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fa fa-user"></i>
            <span>Register</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/uniform">
            <i class="fa fa-user"></i>
            <span>Uniform Issuance</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/employee">
            <i class="fa fa-users"></i>
            <span>Employees</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Peoples
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link " href="/search" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-search"></i>
            <span>Search</span>
        </a>
    </li> -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 fa fa-arrow-right" id="sidebarToggle"></button>
        <style>
        .sidebar-dark #sidebarToggle::after {
display:none !important;}

.fa-arrow-right:before {
    content: "\f061";
    color: #dddee0;
}
        </style>
    </div>

</ul>
<!-- End of Sidebar -->

@endsection('menu')
