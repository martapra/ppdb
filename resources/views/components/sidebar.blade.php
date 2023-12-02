<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>


    <!-- Nav Item - Charts -->
    @if (auth()->user()->role == 'pendaftar')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('biodataPendaftar') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>User Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('syaratPendaftaran.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Syarat Pendaftaran</span></a>
        </li>
    @endif
    @if (auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('konfirmasiPendaftaran.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Konfirmasi Pendaftaran</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dataPeserta.index') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>Data Peserta</span></a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
