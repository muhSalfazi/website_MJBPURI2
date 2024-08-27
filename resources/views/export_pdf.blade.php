<!DOCTYPE html>
<html>
<head>
    <title>Data Donasi</title>
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
    <h1>Data Donasi Pembangunan MJB Puri 2</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Nominal Uang</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Tgl Donasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donasi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>Rp {{ number_format($item->nominal_uang, 0, ',', '.') }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->tgl_donasi ? \Carbon\Carbon::parse($item->tgl_donasi)->format('d-m-Y') : '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
