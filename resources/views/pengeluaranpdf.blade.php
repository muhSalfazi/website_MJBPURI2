<!DOCTYPE html>
<html>
<head>
    <title>Data Pengeluaran</title>
    <link href="assets/img/logo-mjb.png" rel="icon">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        td {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Data Pengeluaran Pembangunan MJB Puri 2</h1>
    <p>
        <strong>Periode:</strong>
        @if($start_date && $end_date)
            {{ \Carbon\Carbon::parse($start_date)->format('d-m-Y') }} s/d {{ \Carbon\Carbon::parse($end_date)->format('d-m-Y') }}
        @elseif($start_date)
            Mulai dari {{ \Carbon\Carbon::parse($start_date)->format('d-m-Y') }}
        @elseif($end_date)
            Sampai {{ \Carbon\Carbon::parse($end_date)->format('d-m-Y') }}
        @else
            Tidak ditentukan
        @endif
    </p>
    
    <table>
        <thead>
            <tr>
                <th scope="col" class="tex-center">#</th>
                <th scope="col" class="tex-center">Nama</th>
                <th scope="col" class="tex-center">Nominal Uang</th>
                <th scope="col" class="tex-center">Keterangan</th>
                <th scope="col" class="tex-center">Tgl Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 0 @endphp
            @foreach ($pengeluaran as $item)
                <tr>
                    @php $counter++ @endphp
                    <td>{{ $loop->iteration }}</td>
                    <td class="tex-center">{{ $item->name }}</td>
                    <td class="tex-center">Rp {{ number_format($item->nominal_uang, 0, ',', '.') }}
                    </td>
                    <td class="tex-center">{{ $item->keterangan }}</td>
                    <td class="tex-center">
                        {{ $item->tgl_pengeluaran ? \Carbon\Carbon::parse($item->tgl_pengeluaran)->format('d-m-Y') : '-' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
