@extends('layout.app')

@section('title', 'Dashboard')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
  <!-- Donasi Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'today']) }}">Today</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'month']) }}">This Month</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'year']) }}">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Donasi <span>| {{ $filterText }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{ number_format($totalDonasi, 2) }}</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Pengeluaran Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'today']) }}">Today</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'month']) }}">This Month</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'year']) }}">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pengeluaran <span>| {{ $filterText }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{ number_format($totalPengeluaran, 2) }}</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                  
                    <!-- Total Saldo Card -->
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'today']) }}">Today</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'month']) }}">This Month</a></li>
                                    <li><a class="dropdown-item" href="{{ route('dashboard', ['filter' => 'year']) }}">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Total Saldo <span>| {{ $filterText }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi-wallet2"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{ number_format($totalSaldo, 2) }}</h6>
                                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span> --}}

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Pie Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pie Chart</h5>

                                <!-- Pie Chart -->
                                <div id="pieChart"></div>

                                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        var options = {
                                            series: [{{ $totalPengeluaran }}, {{ $totalDonasi }}],
                                            chart: {
                                                height: 350,
                                                type: 'pie',
                                                toolbar: {
                                                    show: true
                                                }
                                            },
                                            labels: ['Pengeluaran', 'Pemasukan']
                                        };

                                        var chart = new ApexCharts(document.querySelector("#pieChart"), options);
                                        chart.render();
                                    });
                                </script>
                                <!-- End Pie Chart -->
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
@endsection
