@extends('template.main')
@section('title', 'Penyandang Disabilitas')
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
                            <h3 class="card-title">Data Disabilitas per Dusun</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dusun</th>
                                        <th>Fisik</th>
                                        <th>Ganda</th>
                                        <th>Mental</th>
                                        <th>Sensorik</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item['dusun'] }}</td>
                                        <td>{{ $item['fisik'] }}</td>
                                        <td>{{ $item['ganda'] }}</td>
                                        <td>{{ $item['mental'] }}</td>
                                        <td>{{ $item['sensorik'] }}</td>
                                        <td>{{ $item['total'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th></th>
                                        <th>{{ array_sum(array_column($data, 'fisik')) }}</th>
                                        <th>{{ array_sum(array_column($data, 'ganda')) }}</th>
                                        <th>{{ array_sum(array_column($data, 'mental')) }}</th>
                                        <th>{{ array_sum(array_column($data, 'sensorik')) }}</th>
                                        <th>{{ array_sum(array_column($data, 'total')) }}</th>
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
