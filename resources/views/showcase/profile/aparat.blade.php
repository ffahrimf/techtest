@extends('navbar-tailwind.navbar')
@section('title', 'Aparatur Desa')
@section('content')

<div class="flex flex-col gap-3 md:px-20">
    <div class="flex flex-col gap-7">
        <h1 class="mt-32 text-2xl md:text-4xl font-dmsans mx-10 md:mx-0">Aparatur <strong>Desa</strong></h1>
        
        <div class="grid grid-cols-2 md:grid-cols-4 mx-5 md:mx-auto gap-7 md:gap-16">
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/haris2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Mokhamad Haris Nasution</h3>
                    <p>Kepala Desa</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/yaya2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Yaya Rusyaman</h3>
                    <p>Sekretaris</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/ina2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Ina Rodiah</h3>
                    <p>Keuangan</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/enok2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Enok Sopiatul Hasanah</h3>
                    <p>Perencanaan</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/didin2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Didin</h3>
                    <p>Umum</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/nana2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Nana</h3>
                    <p>Pemerintahan</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/parid2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Parid Hasanudin, ST</h3>
                    <p>Pelayanan</p>
                </div>
            </div>
            <div class="relative md:w-56 flex-shrink-0">
                <img src="/assets/img/aparat-desa/edi2.png" alt="Foto Aparatur"
                    class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                <div class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                    <h3 class="text-xl font-semibold">Edi Junaedi</h3>
                    <p>Kesejahteraan</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
