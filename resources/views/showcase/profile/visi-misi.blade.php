@extends('navbar-tailwind.navbar')

@section('title', 'Visi Misi Desa')

@section('content')

    <div class="flex flex-col gap-3 md:px-20">
        <div class="flex flex-col gap-7">
            <h1 class="mt-32 text-2xl md:text-4xl font-dmsans mx-10 md:mx-0">Visi & Misi <strong>Desa</strong></h1>

            @foreach ($visiMisi as $data)
                <div
                    class="flex flex-col mx-10 md:mx-0 font-dmsans gap-4 p-4 bg-white border border-gray-200 shadow-lg rounded-lg">
                    <h2 class="font-medium text-xl md:text-3xl text-primaryhover">Visi</h2>
                    <hr class="border-t-[1px] border-gray-300" />
                    <p>"{{ $data->visi }}".</p>
                </div>

                <!-- Display Misi Cards -->
                <div class="row mt-4">
                    @foreach ($visiMisi as $data)
                        <div class="col-md-12 mb-4">
                            <div
                                class="flex flex-col mx-10 md:mx-0 font-dmsans gap-4 p-4 bg-white border border-gray-200 shadow-lg rounded-lg">
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
                                    <form class="d-inline" action="/admin/visi-misi/{{ $data->id }}/edit"
                                        method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

@endsection
