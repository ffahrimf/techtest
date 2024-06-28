<!DOCTYPE html>
<html>

<head>
  <title>Data Barang</title>
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  th,
  td {
    padding: 8px;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
  }
  </style>
</head>

<body>
  <h1>Data Barang</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Supplier</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Catatan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tbarang as $data)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->category }}</td>
        <td>{{ $data->supplier }}</td>
        <td>{{ $data->stock }}</td>
        <td>Rp. {{ number_format($data->price, 0) }}</td>
        <td>{{ $data->note }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>