@extends('navbar-tailwind.navbar')
@section('title', 'Sejarah Desa')
@section('content')

    <div class="flex flex-col gap-3 md:px-20">
        <div class="flex flex-col gap-7 mx-10 md:mx-0">
            <h1 class="mt-32 text-4xl font-dmsans">Sejarah <strong>Desa</strong></h1>
            @foreach ($sejarah as $data)
                <p class="text-justify font-dmsans">
                    {!! nl2br(e($data->content)) !!}
                </p>
            @endforeach
        </div>
    </div>

@endsection
