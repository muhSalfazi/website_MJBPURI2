@extends('layout.app')

@section('title', 'Pengeluaran')
<link href="assets/img/logo-mjb.png" rel="icon">

@section('content')
    <div class="pagetitle">
        <h1>Pengeluaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Data Pengeluaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Donasi</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                            Tambah Donasi
                        </button>

                        <!-- Filter Form -->
                        <form method="GET" action="{{ route('donasi.index') }}" class="mb-3">
                            <div class="row mt-2">
 <div class="col-md-4">
    <label for="start_date" class="form-label">Tanggal Mulai</label>
    <input type="text" id="start_date" name="start_date" class="form-control"
           value="{{ request('start_date') }}" 
           onfocus="(this.type='date'); this.placeholder = '';" 
           onblur="if(this.value==''){this.type='text';this.placeholder='Start Date';}" 
           placeholder="Start Date">
</div>
<div class="col-md-4">
    <label for="end_date" class="form-label">Tanggal Akhir</label>
    <input type="text" id="end_date" name="end_date" class="form-control"
           value="{{ request('end_date') }}" 
           onfocus="(this.type='date'); this.placeholder = '';" 
           onblur="if(this.value==''){this.type='text';this.placeholder='End Date';}" 
           placeholder="End Date">
</div>


                                <div class="col-md-4 d-flex align-items-end mt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                    <a href="{{ route('donasi.index') }}" class="btn btn-secondary btn-sm ms-2">Reset</a>
                                </div>
                            </div>
                        </form>


                        <div class="table-responsive ">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" class="tex-center">#</th>
                                        <th scope="col" class="tex-center">Nama</th>
                                        <th scope="col" class="tex-center">Nominal Uang</th>
                                        <th scope="col" class="tex-center">Keterangan</th>
                                        <th scope="col" class="tex-center">Tgl Pengeluaran</th>
                                        <th scope="col" class="tex-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0 @endphp
                                    @foreach ($pengeluaran as $item)
                                        <tr>
                                            @php $counter++ @endphp
                                            <th scope="row" class="tex-center">{{ $counter }}</th>
                                            <td class="tex-center">{{ $item->name }}</td>
                                            <td class="tex-center">Rp {{ number_format($item->nominal_uang, 0, ',', '.') }}
                                            </td>
                                            <td class="tex-center">{{ $item->keterangan }}</td>
                                            <td class="tex-center">{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td class="tex-center">
                                                <button type="button" class="btn btn-primary btn-sm ms-2 mt-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                                <form action="{{ route('pengeluaran.destroy', $item->id) }}" method="POST"
                                                    class="d-inline" onsubmit="return confirm('Apa kamu yakin?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm ms-2"
                                                        onsubmit="return confirm('Apa kamu yakin?');">Delete</button>
                                                </form>

                                                </form>
                                            </td>
                                        </tr>
                                        {{-- @include('donasi.edit', ['donasi' => $item]) --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- end --}}
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/umd/simple-datatables.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataTable = new simpleDatatables.DataTable(".datatable");
        });
    </script>

@endsection
{{-- modal create --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Donasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pengeluaran.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="nominal_uang" class="form-label">Nominal Uang</label>
                        <input type="number" class="form-control" id="nominal_uang" name="nominal_uang" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modal update --}}
@foreach ($pengeluaran as $item)
    <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
        aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Donasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pengeluaran.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name{{ $item->id }}" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name{{ $item->id }}" name="name"
                                placeholder="{{ $item->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="nominal_uang{{ $item->id }}" class="form-label">Nominal Uang</label>
                            <input type="number" class="form-control" id="nominal_uang{{ $item->id }}"
                                name="nominal_uang"
                                placeholder="Rp {{ number_format($item->nominal_uang, 0, ',', '.') }}">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan{{ $item->id }}" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan{{ $item->id }}"
                                name="keterangan" placeholder="{{ $item->keterangan }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
@endsection
