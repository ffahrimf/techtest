@extends('sctemplate.scmain')
@section('title', 'Luas Wilayah')
@section('content')

    <!-- Main content -->
    <section class="content mt-28 md:px-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $totalLuas = 0;
                                $totalRW = 0;
                                $totalRT = 0;
                            @endphp
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Dusun</th>
                                        <th>Luas (ha)</th>
                                        <th>RW</th>
                                        <th>RT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $dusuns = [
                                            ['name' => 'Pamekaran', 'luas' => 217, 'rw' => 2, 'rt' => 8],
                                            ['name' => 'Cimanglid', 'luas' => 185, 'rw' => 2, 'rt' => 7],
                                            ['name' => 'Cimaja', 'luas' => 158, 'rw' => 1, 'rt' => 3],
                                            ['name' => 'Limusagung', 'luas' => 47, 'rw' => 1, 'rt' => 2],
                                            ['name' => 'Mangunjaya', 'luas' => 22, 'rw' => 1, 'rt' => 4],
                                            ['name' => 'Darawati', 'luas' => 80, 'rw' => 1, 'rt' => 2],
                                            ['name' => 'Nanggeleng', 'luas' => 74.34, 'rw' => 1, 'rt' => 4]
                                        ];
                                    @endphp
                                    @foreach ($dusuns as $index => $dusun)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $dusun['name'] }}</td>
                                            <td>{{ $dusun['luas'] }}</td>
                                            <td>{{ $dusun['rw'] }}</td>
                                            <td>{{ $dusun['rt'] }}</td>
                                        </tr>
                                        @php
                                            $totalLuas += $dusun['luas'];
                                            $totalRW += $dusun['rw'];
                                            $totalRT += $dusun['rt'];
                                        @endphp
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th>{{ $totalLuas }}</th>
                                        <th>{{ $totalRW }}</th>
                                        <th>{{ $totalRT }}</th>
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
    </section>

@endsection
