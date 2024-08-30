<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-heading">Data</li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('donasi.index') ? 'active' : 'collapsed' }}" href="{{ route('donasi.index') }}">
                <i class="bi bi-cash"></i>
                <span>Pemasukan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('pengeluaran.index') ? 'active' : 'collapsed' }}" href="{{ route('pengeluaran.index') }}">
                <i class="bi bi-wallet-fill"></i>
                <span>Pengeluaran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('pesan.index') ? 'active' : 'collapsed' }}" href="{{ route('pesan.index') }}">
                <i class="bi bi-chat"></i>
                <span>Pesan</span>
            </a>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link collapsed" href="#"
                onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin logout?')) document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>
    </ul>
</aside><!-- End Sidebar-->

<!-- Add your custom CSS -->
<style>
    .sidebar-nav .nav-link.active {
        background-color: #2c3e50; /* Warna latar belakang untuk item aktif */
        color: #ecf0f1; /* Warna teks untuk item aktif */
    }

    .sidebar-nav .nav-link.active i {
        color: #ecf0f1; /* Warna ikon untuk item aktif */
    }

    .sidebar-nav .nav-link:hover {
        background-color: #34495e; /* Warna latar belakang saat hover */
        color: #ecf0f1; /* Warna teks saat hover */
    }

    .sidebar-nav .nav-link i {
        transition: color 0.3s ease;
    }

    .sidebar-nav .nav-link:hover i {
        color: #ecf0f1; /* Warna ikon saat hover */
    }
</style>
