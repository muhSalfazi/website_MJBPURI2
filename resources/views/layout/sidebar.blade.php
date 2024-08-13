<!-- ======= Sidebar ======= -->
<!-- Template Main CSS File -->
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-heading">Data</li>
        <li class="nav-item">
            <a class="nav-link collapsed " href="{{ route('donasi.index') }}">
                <i class="bi bi-cash"></i>
                <span>Pemasukan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('pengeluaran.index') }}">
                <i class="bi bi-wallet-fill"></i>
                <span>Pengeluaran</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('pesan.index') }}">
                <i class="bi bi-chat"></i>
                <span>Pesan </span>
            </a>
        </li>
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="nav-link collapsed" href="#"
                onclick="event.preventDefault(); if (confirm('Are you sure you want to log out?')) document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>
    </ul>
</aside><!-- End Sidebar-->
<!-- End Sidebar-->

{{-- @section('scripts')
    <script src="assets/js/main1.js"></script>
@endsection --}}
