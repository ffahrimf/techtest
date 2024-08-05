<!DOCTYPE html>
<html>



<head>
  <title>Data Penduduk</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 10px; /* Adjusted font size */
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
      padding: 4px; /* Adjusted padding */
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
        <th>Tgl. Lahir</th>
        <th>Kelamin</th>
        <th>RT</th>
        <th>RW</th>
        <th>Agama</th>
        <th>Status</th>
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Darah</th>
        <th>SHDK</th>
        <th>Ayah</th>
        <th>Ibu</th>
        <th>Kepala Keluarga</th>
        <th>Alamat</th>
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
                        <td>{{ $data->rt }}</td>
                        <td>{{ $data->rw }}</td>
                        <td>{{ $data->agama }}</td>
                        <td>{{ $data->status_perkawinan }}</td>
                        <td>{{ $data->pendidikan }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->golongan_darah }}</td>
                        <td>{{ $data->shdk }}</td>
                        <td>{{ $data->ayah }}</td>
                        <td>{{ $data->ibu }}</td>
                        <td>{{ $data->kepala_keluarga }}</td>
                        <td>{{ $data->alamat }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>