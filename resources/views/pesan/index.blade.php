@extends('layout.app')

@section('title', 'Pesan')
<link href="assets/img/logo-mjb.png" rel="icon">

@section('content')
    <div class="pagetitle">
        <h1>Pesan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Data Pesan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pesan</h5>

                        <!-- Filter Form -->
                        <form method="GET" action="{{ route('pesan.index') }}" class="mb-3">
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <label for="start_date" class="form-label">Tanggal Mulai</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        placeholder="Start Date" value="{{ request('start_date') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="end_date" class="form-label">Tanggal Akhir</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control"
                                        placeholder="End Date" value="{{ request('end_date') }}">
                                </div>
                                <div class="col-md-4 d-flex align-items-end mt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                    <a href="{{ route('pesan.index') }}" class="btn btn-secondary btn-sm ms-2">Reset</a>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tex-center">#</th>
                                        <th scope="col" class="tex-center">Nama</th>
                                        <th scope="col" class="tex-center">Phone</th>
                                        <th scope="col" class="tex-center">Pesan</th>
                                        <th scope="col" class="tex-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0 @endphp
                                    @foreach ($pesans as $item)
                                        <tr>
                                            @php $counter++ @endphp
                                            <th scope="row" class="tex-center">{{ $counter }}</th>
                                            <td class="tex-center">{{ $item->name }}</td>
                                            <td class="tex-center">{{ $item->phone }}

                                            </td>
                                            <td class="tex-center">{{ $item->pesan }}</td>
                                            <td class="tex-center">
                                                <a href="https://wa.me/{{ $item->phone }}" target="_blank"
                                                    class="btn btn-success btn-sm">
                                                    <i class="bi bi-whatsapp" aria-hidden="true"></i> Chat
                                                </a>

                                                <form action="{{ route('pesan.destroy', $item->id) }}" method="POST"
                                                    class="d-inline" onsubmit="return confirm('Apa kamu yakin?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm ms-2">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/umd/simple-datatables.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataTable = new simpleDatatables.DataTable(".datatable");
        });
    </script>
@endsection
