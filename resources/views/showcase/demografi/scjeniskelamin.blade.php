@extends('sctemplate.scmain')
@section('title', 'Jenis Kelamin')
@section('content')

    <!-- Main content -->
    <section class="content mt-28 md:px-20">
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
                                <th>No</th>
                                <th>Jenis Kelamin</th>
                                <th>Jumlah (n)</th>
                                <th>Persentase (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenisKelaminData as $index => $data)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $data['jenis_kelamin'] }}</td>
                                <td>{{ $data['jumlah_n'] }}</td>
                                <td>{{ $data['jumlah_percent'] }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th>{{ $total_jumlah_n }}</th>
                                <th>{{ $total_jumlah_percent }}%</th>
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
