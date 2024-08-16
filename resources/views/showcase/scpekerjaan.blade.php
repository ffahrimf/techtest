@extends('sctemplate.scmain')
@section('title', 'Pekerjaan')
@section('content')

    <!-- Main content -->
    <section class="content mt-28 px-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        {{-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>     --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Pekerjaan</th>
                                        <th colspan="2">Jumlah</th>
                                        <th colspan="2">Laki-laki</th>
                                        <th colspan="2">Perempuan</th>
                                    </tr>
                                    <tr>
                                        <th>n</th>
                                        <th>%</th>
                                        <th>n</th>
                                        <th>%</th>
                                        <th>n</th>
                                        <th>%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pekerjaanData as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $data['pekerjaan'] }}</td>
                                            <td>{{ $data['jumlah_n'] }}</td>
                                            <td>{{ $data['jumlah_percent'] }}%</td>
                                            <td>{{ $data['laki_laki_n'] }}</td>
                                            <td>{{ $data['laki_laki_percent'] }}%</td>
                                            <td>{{ $data['perempuan_n'] }}</td>
                                            <td>{{ $data['perempuan_percent'] }}%</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th>{{ $total_jumlah_n }}</th>
                                        <th>{{ $total_jumlah_percent }}</th>
                                        <th>{{ $total_laki_laki_n }}</th>
                                        <th>{{ $total_laki_laki_percent }}</th>
                                        <th>{{ $total_perempuan_n }}</th>
                                        <th>{{ $total_perempuan_percent }}</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
