@extends('template.main')
@section('title', 'Visi Misi')
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

                <!-- Display Visi Cards -->
                <div class="row">
                    @foreach ($visiMisi as $data)
                        <div class="col-md-12 mb-4">
                            <div class="flex flex-col mx-10 md:mx-0 font-dmsans gap-4 p-4 bg-white border border-gray-200 shadow-md rounded-lg">
                                <h2 class="font-medium text-xl md:text-3xl text-primaryhover">Visi</h2>
                                <hr class="border-t-[1px] border-gray-300" />
                                <p>{{ $data->visi }}</p>
                                <div class="text-right mt-4">
                                    <form class="d-inline" action="/admin/visi-misi/{{ $data->id }}/edit" method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Display Misi Cards -->
                <div class="row mt-4">
                    @foreach ($visiMisi as $data)
                        <div class="col-md-12 mb-4">
                            <div class="flex flex-col mx-10 md:mx-0 font-dmsans gap-4 p-4 bg-white border border-gray-200 shadow-md rounded-lg">
                                <h2 class="font-medium text-xl md:text-3xl text-primaryhover">Misi</h2>
                                <hr class="border-t-[1px] border-gray-300" />
                                @php
                                    // Menambahkan <br> sebelum angka yang bukan pertama
                                    $misiFormatted = preg_replace('/(\d+\.\s)/', '<br>$1', $data->misi, -1, $count);
                                    // Menghapus <br> pertama jika ada
                                    $misiFormatted = preg_replace('/^<br>/', '', $misiFormatted);
                                @endphp
                                <p>{!! $misiFormatted !!}</p>
                                <div class="text-right mt-4">
                                    <form class="d-inline" action="/admin/visi-misi/{{ $data->id }}/edit" method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
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
