<!DOCTYPE html>
<html>

<head>
  <title>Data Penduduk</title>
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
  <h1>Data Penduduk</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>No KK</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Agama</th>
        <th>Status Perkawinan</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Status</th>
        <th>Golongan Darah</th>
        <th>Kewarganegaraan</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($t_penduduk as $data)
      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->no_kk }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->tempat_lahir }}</td>
                        <td>{{ $data->tanggal_lahir }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->rt }}</td>
                        <td>{{ $data->rw }}</td>
                        <td>{{ $data->agama }}</td>
                        <td>{{ $data->status_perkawinan }}</td>
                        <td>{{ $data->pendidikan }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->golongan_darah }}</td>
                        <td>{{ $data->kewarganegaraan }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>