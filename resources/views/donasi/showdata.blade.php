@extends('layout.app')

@section('title', 'Donasi')
<link href="assets/img/logo-mjb.png" rel="icon">

@section('content')
    <div class="pagetitle">
        <h1>Donasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Data Donasi</li>
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
                                    <input type="date" id="start_date" name="start_date" class="form-control"
                                        onfocus="(this.type='date')"
                                        onblur="if(this.value==''){this.type='text';this.placeholder='Start Date';}"
                                        placeholder="Start Date" value="{{ request('start_date') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="end_date" class="form-label">Tanggal Akhir</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control"
                                        onfocus="(this.type='date')"
                                        onblur="if(this.value==''){this.type='text';this.placeholder='End date';}"
                                        placeholder="End Date" value="{{ request('end_date') }}">
                                </div>
                                <div class="col-md-4 d-flex align-items-end mt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                    <a href="{{ route('donasi.index') }}" class="btn btn-secondary btn-sm ms-2">Reset</a>
                                </div>
                            </div>
                        </form>
                        {{-- download pdf --}}
                        <button type="button" class="btn btn-danger btn-sm"
                            onclick="window.location='{{ route('viewpdf', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}'">
                            <i class="bi bi-file-pdf-fill"></i>Download PDF
                        </button>
                        {{-- end --}}

                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Nama</th>
                                        <th scope="col" class="text-center">Nominal Uang</th>
                                        <th scope="col" class="text-center">Alamat</th>
                                        <th scope="col" class="text-center">Kategori</th>
                                        <th scope="col" class="text-center">Tgl Donasi</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0 @endphp
                                    @foreach ($donasi as $item)
                                        <tr>
                                            @php $counter++ @endphp
                                            <th scope="row" class="text-center">{{ $counter }}</th>
                                            <td class="text-center">{{ $item->name }}</td>
                                            <td class="text-center">Rp {{ number_format($item->nominal_uang, 0, ',', '.') }}
                                            </td>
                                            <td class="text-center">{{ $item->alamat }}</td>
                                            <td class="text-center">{{ $item->kategori }}</td>
                                            <td class="text-center">
                                                {{ $item->tgl_donasi ? \Carbon\Carbon::parse($item->tgl_donasi)->format('d-m-Y') : '-' }}
                                            </td>

                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary btn-sm ms-2 mt-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $item->id }}">Edit</button>
                                                <form action="{{ route('donasi.destroy', $item->id) }}" method="POST"
                                                    class="d-inline" onsubmit="return confirm('Apa kamu yakin?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm ms-2 mt-1"><i class="bi bi-trash3">Delete</i></button>
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

    {{-- modal create --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Donasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('donasi.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Silahkan isi nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nominal_uang" class="form-label">Nominal Uang</label>
                            <input type="number" class="form-control" id="nominal_uang" name="nominal_uang" placeholder="Inputkan nominal uang donasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="silahkan isi Alamat Pendonasi"required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="" disabled selected>Pilih Kategori</option>
                                <option value="cash" {{ old('kategori') == 'cash' ? 'selected' : '' }}>Cash</option>
                                <option value="transfer" {{ old('kategori') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="tgl_donasi" class="form-label">Tanggal Donasi</label>
                            <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi">
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
    @foreach ($donasi as $item)
        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
            aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit Donasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('donasi.update', $item->id) }}" method="POST">
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
                                <label for="alamat{{ $item->id }}" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat{{ $item->id }}"
                                    name="alamat" placeholder="{{ $item->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="kategori{{ $item->id }}" class="form-label">Kategori</label>
                            <select class="form-control" id="kategori{{ $item->id }}" name="kategori">
                                <option value="" disabled {{ $item->kategori == '' ? 'selected' : '' }}>Pilih Kategori</option>
                                <option value="cash" {{ old('kategori', $item->kategori) == 'cash' ? 'selected' : '' }}>Cash</option>
                                <option value="transfer" {{ old('kategori', $item->kategori) == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            </select>
                                
                            </div>
                            <div class="mb-3">
                                <label for="tgl_donasi" class="form-label">Tanggal Donasi</label>
                                <input type="date" class="form-control" id="tgl_donasi" name="tgl_donasi"
                                    value="{{ old('tgl_donasi', $item->tgl_donasi ? \Carbon\Carbon::parse($item->tgl_donasi)->format('Y-m-d') : '') }}">
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

@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/umd/simple-datatables.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dataTable = new simpleDatatables.DataTable(".datatable");
        });
    </script>
@endsection
