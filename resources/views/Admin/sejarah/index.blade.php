@extends('template.main')
@section('title', 'Sejarah Desa')
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
        <div class="content">
            <div class="container-fluid">

                <!-- Display Misi Cards -->
                <div class="row mt-4">
                    @foreach ($sejarah as $data)
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Sejarah</h5>
                                </div>
                                <div class="card-body">
                                    {!! nl2br(e($data->content)) !!}
                                </div>
                                
                                <div class="card-footer text-right">
                                    <form class="d-inline" action="/admin/sejarah/{{ $data->id }}/edit"
                                        method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm mr-1"
                                            style="color: white;">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div><!-- /.container-fluid -->
        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
