@extends('index')
@section('content')
</head>
<body>
    <h1>DATA BARANG</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Supplier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_barang as $barang)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ "Rp " . number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->id_supplier }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
@endsection
