@extends('template.main')
@section('title', 'Umur')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            {{-- <div class="card-header">
                <h3 class="card-title">DataTable with Age Categories</h3>
              </div>     --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Kategori Umur</th>
                                            <th colspan="2">Jumlah</th>
                                            <th class="hidden md:table-cell" colspan="2">Laki-laki</th>
                                            <th class="hidden md:table-cell" colspan="2">Perempuan</th>
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
                                        @foreach ($umurData as $index => $data)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $data['umur'] }}</td>
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
                                            <th>Total</th>
                                            <th></th>
                                            <th>{{ $total_jumlah_n }}</th>
                                            <th></th>
                                            <th>{{ $total_laki_laki_n }}</th>
                                            <th></th>
                                            <th>{{ $total_perempuan_n }}</th>
                                            <th></th>
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
        <!-- /.content -->
    </div>

@endsection
