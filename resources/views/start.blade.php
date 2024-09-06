<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>

    {{-- <link rel="stylesheet" href="style.css" /> --}}
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="/assets/img/mountain.png" type="image/x-icon" />

    <title>Sistem Informasi Desa Payungagung</title>
</head>

<style>
    #zoom-img {
        transition: transform 0.3s ease;
    }

    button:hover #zoom-img {
        transform: scale(1.2);
    }

    input::placeholder {
        font-family: "Poppins";
        font-size: 0.75rem;
    }
</style>

<body class="bg-gray-100">
    <nav class="fixed top-0 z-50 w-full bg-transparent px-10">
        <div class="container mx-auto mt-8 mb-8 bg-transparent py-3 rounded-full relative transition ease-in"
            id="bg-navbar">
            <div class="flex flex-wrap justify-between items-center mx-10">
                <div class="flex items-center">
                    <a href="#" class="nav-link"><img src="/assets/img/mountain.png" class="h-7"
                            alt="" /></a>
                    <a href="#" class="nav-link ml-3 text-xl text-gray-800 font-medium">SI<b>PAGUNG</b></a>
                </div>
                <button type="button"
                    class="flex md:hidden p-2 hover:cursor-pointer text-primary hover:text-primaryhover transition duration-200 ease-in-out"
                    onclick="openNavbar()">
                    <i class="fas fas fa-bars"></i>
                </button>
                <div class="hidden md:block w-full md:w-auto font-dm-sans font-medium text-white py-4 px-3 md:p-0 rounded-xl md:rounded-none md:text-gray-700 bg-primary md:bg-transparent mt-5 md:mt-0 absolute md:relative top-full left-0 right-0 z-10"
                    id="navbar">
                    <ul class="flex flex-col md:flex-row gap-3 md:gap-9">
                        <li class="md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out">
                            <a href="#" class="nav-link">Beranda</a>
                        </li>
                        <li class="relative">
                            <a class="cursor-pointer nav-link md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out inline-flex items-center"
                                onclick="toggleDropdownProfil(event)">
                                Profil
                                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>
                            <ul id="dropdownMenuProfil"
                                class="absolute left-0 hidden bg-white text-gray-800 py-2 mt-2 w-48 rounded-lg shadow-lg">
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/profile/visi-misi" class="block px-4 py-2">Visi Misi Desa</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/profile/sejarah" class="block px-4 py-2">Sejarah Desa</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/profile/aparat" class="block px-4 py-2">Aparatur Desa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a class="cursor-pointer nav-link md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out inline-flex items-center"
                                onclick="toggleDropdownDemo(event)">
                                Demografi
                                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>
                            <ul id="dropdownMenuDemo"
                                class="absolute left-0 hidden bg-white text-gray-800 py-2 mt-2 w-48 rounded-lg shadow-lg">
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a class="block px-4 py-2">Wilayah Administratif</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/pendidikan" class="block px-4 py-2">Pendidikan</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/pekerjaan" class="block px-4 py-2">Pekerjaan</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/agama" class="block px-4 py-2">Agama</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/jeniskelamin" class="block px-4 py-2">Jenis Kelamin</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/umur" class="block px-4 py-2">Umur</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/luaswilayah" class="block px-4 py-2">Luas Wilayah</a>
                                </li>
                                <li class="hover:bg-gray-100 hover:text-primary">
                                    <a href="/showcase/demografi/disabilitas" class="block px-4 py-2">Disabilitas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative">
                            <a class="cursor-pointer nav-link md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out inline-flex items-center"
                                onclick="toggleDropdownPotensi(event)">
                                Potensi
                                <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </a>
                            <ul id="dropdownMenuPotensi"
                                class="absolute left-0 hidden bg-white text-gray-800 py-2 mt-2 w-48 rounded-lg shadow-lg">
                                <li class="hover:bg-gray-100 hover:text-primary
                                ary">
                                    <a href="/showcase/lapak" class="block px-4 py-2">Lapak Desa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out">
                            <a href="/showcase/berita" class="">Berita</a>
                        </li>
                        <hr class="border-t-[1px] border-gray-300" />
                        <li
                            class="md:hidden md:hover:bg-transparent md:hover:text-primary transition duration-200 ease-in-out">
                            <a href="/login" class="">Masuk</a>
                        </li>
                    </ul>
                </div>
                <div class="hidden md:block">
                    <a class="text-sm hidden md:block bg-primary hover:bg-primaryhover py-3 px-7 text-white rounded-full font-semibold font-dm-sans hover:cursor-pointer transition duration-300 ease-in-out"
                        href="/login">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </nav>


    <section class=" container mx-auto shadow-2xl"
        style="
        background-image: url(./assets/img/sawah2.jpg);
        background-size: cover;
      ">

        <div class="flex justify-center items-center h-screen">
            <div class="text-center text-2xl md:text-6xl">

                <p class="font-poppins text-white font-bold md:mb-4">
                    Sistem<span class="text-primary"> Informasi</span>
                </p>
                <h1 class="font-poppins font-bold text-white ">
                    Desa Payungagung
                </h1>

            </div>
        </div>

        </div>
    </section>



    <section class="container mx-auto py-10 mt-10 md:mt-20 space-y-7 md:space-y-14">
        <div class="flex flex-col md:flex-row mx-10 md:mx-20 gap-7 items-center">
            <!-- Carousel -->
            <div
                class="w-full md:w-7/12 relative overflow-hidden md:h-80 rounded-2xl border border-gray-200 shadow-lg">
                <div class="carousel-wrapper flex transition-transform duration-500 ease-in-out">

                    <img src="./assets/img/UPACARA.jpg" alt="" class="object-cover w-full h-[inherit]">

                    <img src="./assets/img/FOTBAR-VOLI.jpg" alt="" class="object-cover w-full h-[inherit]">
                    <img src="./assets/img/pose-nasional.jpg" alt="" class="object-cover w-full h-[inherit]">
                </div>
            </div>
            <!-- Input Form -->
            <div class="w-full md:w-5/12">
                <div
                    class="bg-white border border-gray-200 shadow-lg rounded-2xl px-5 md:px-10 py-6 md:text-center space-y-5">
                    <h2 class="font-base font-bold">Layanan Mandiri</h2>
                    <hr class="border-t-[1px] border-gray-300 mt-14 mb-14" />
                    <div class="flex items-center bg-gray-100 border-l-4 border-primary px-4 py-2">
                        <svg class="h-6 w-6 text-primary mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-700 text-xs">Hubungi Operator Desa untuk memperoleh PIN</span>
                    </div>
                    <form class="">
                        @csrf
                        <div class="space-y-3">

                            <input type="text" name="email"
                                class="w-full border border-gray-200 focus:ring-primary focus:border-primary rounded-lg px-5 py-2"
                                placeholder="Nomor Induk Kependudukan" />
                            <input type="password" name="password"
                                class="w-full border border-gray-200 focus:ring-primary focus:border-primary rounded-lg px-5 py-2"
                                placeholder="Kode Pin" />
                            <button
                                class="w-full bg-primary hover:bg-primaryhover transition ease-in-out duration-300 text-white text-sm font-dm-sans py-2 px-5 rounded-lg">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row mx-10 md:mx-20 gap-14 md:gap-7 items-end">
            <div class="w-full md:w-7/12 ">
                <div class="flex flex-col gap-10 md:gap-14">
                    <h1 class="text-center text-2xl md:text-5xl font-inter font-bold">
                        <span>Statistik </span><span><span class="text-primary">Desa
                                {{-- </span> There!</span> --}}
                    </h1>
                    <div class="">
                        <div class="grid grid-rows-2 gap-5">
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-5">
                                <div
                                    class="flex justify-center items-center bg-primary hover:bg-primaryhover shadow-lg hover:shadow-2xl transition duration-300 ease-in-out  hover:-translate-y-1 hover:scale-110 py-5 md:py-8 px-4 rounded-2xl">
                                    <div class="flex flex-col md:grid md:grid-cols-2">
                                        <div class="flex items-center justify-center">
                                            <h3 class="text-2xl md:text-5xl text-white font-semibold font-dmsans">
                                                {{ $penduduk }}</h3>
                                        </div>
                                        <div class="flex justify-center md:justify-center items-center">
                                            <h5 class="text-white font-medium font-dmsans text-lg md:text-xl">Populasi
                                            </h5>
                                        </div>
                                    </div>

                                </div>
                                <div
                                    class="flex justify-center items-center bg-primary hover:bg-primaryhover shadow-lg hover:shadow-2xl transition duration-300 ease-in-out  hover:-translate-y-1 hover:scale-110 py-5 md:py-8 px-4 rounded-2xl">
                                    <div class="flex flex-col md:grid md:grid-cols-2">
                                        <div class="flex items-center justify-center">
                                            <h3 class="text-2xl md:text-5xl text-white font-semibold font-dmsans">
                                                {{ $jumlahKeluarga }}
                                            </h3>
                                        </div>
                                        <div class="flex justify-center md:justify-center items-center">
                                            <h5 class="text-white font-medium font-dmsans text-lg md:text-xl">Keluarga
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div
                                class="bg-primary hover:bg-primaryhover shadow-lg hover:shadow-2xl transition duration-300 ease-in-out  hover:-translate-y-1 hover:scale-105 py-5 md:py-8 px-4 rounded-2xl">

                                <div class="flex flex-col md:grid md:grid-cols-12">
                                    <div class="flex items-center justify-center  md:col-start-1 md:col-span-4">
                                        <h3 class="text-3xl md:text-5xl text-white font-semibold font-dmsans">
                                            {{ $mostCommonJobCount }}
                                        </h3>
                                    </div>
                                    <div
                                        class="flex justify-center md:justify-center items-center md:col-start-5 md:col-span-8 ">
                                        <h5
                                            class="text-white font-medium font-dmsans text-md md:text-xl text-center md:text-left">
                                            Warga <span class="hidden md:inline">Desa Payungagung</span> bermata
                                            pencaharian sebagai<strong> {{ $mostCommonJobName }}</strong>.
                                        </h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div href="" class="w-full md:w-5/12 relative overflow-hidden rounded-2xl">
                <img src="{{ asset($beritaTerbaru->image) }}" alt="{{ $beritaTerbaru->judul }}"
                    class="object-cover w-full h-[inherit] brightness-75 transition-transform duration-[2000ms] transform hover:scale-110 border border-gray-200 shadow-lg">

                <!-- Text Overlay -->
                <div class="absolute bottom-0 left-0 w-full p-6 bg-transparent text-white font-poppins">
                    <a href="/showcase/berita">
                        <h3 class="text-xl md:text-2xl font-semibold">{{ $beritaTerbaru->heading }}:</h3>
                        <p class="hidden md:block text-sm md:text-lg">{{ Str::limit($beritaTerbaru->judul, 35, '...') }}</p>
                        <p class="md:hidden text-sm md:text-lg">{{ Str::limit($beritaTerbaru->judul, 30, '...') }}</p>
                    </a>
                    <div class="flex items-center mt-3 text-xs md:text-sm text-white">
                        <div class="flex items-center mr-4">
                            <i class="fa-solid fa-calendar-check mr-1"></i>
                            <span>{{ \Carbon\Carbon::parse($beritaTerbaru->tanggal)->format('F j, Y') }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-comment mr-1 "></i>
                            <span>0 Comment</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mx-10 md:mx-20 ">
            <div class="container mx-auto">
                <a href="/showcase/lapak"
                    class="flex justify-center items-center border border-gray-200 bg-white shadow-md hover:shadow-lg transition duration-300 ease-in-out py-3 md:py-8 px-4 rounded-lg md:rounded-2xl">
                    <div class="flex md:flex-row items-center md:gap-12 gap-5">
                        <img src="./assets/img/lapak-desa/market.png" class="hidden md:block h-7 md:h-12"
                            alt="">
                        <img src="./assets/img/lapak-desa/shopping-bag.png" class="hidden md:block h-7 md:h-12"
                            alt="">
                        <img src="./assets/img/lapak-desa/mobile-shopping.png" class="h-7 md:h-12" alt="">

                        <h3 class="text-2xl md:text-4xl  font-semibold font-dmsans">
                            Lapak Desa
                        </h3>
                        <img src="./assets/img/lapak-desa/boutique.png" class="hidden md:block h-7 md:h-12 alt="">
                        <img src="./assets/img/lapak-desa/food-stall.png" class=" h-7 md:h-12 alt="">
                        <img src="./assets/img/lapak-desa/toko.png" class="hidden md:block h-7 md:h-12 alt="">

                    </div>

                </a>
            </div>
        </div>

        <div class="md:hidden mx-10 md:mx-20 ">
            <div class="container mx-auto">
                <div class="w-full relative overflow-hidden md:h-80 rounded-2xl border border-gray-200 shadow-lg">
                    <div class="carousel-lapak flex transition-transform duration-500 ease-in-out">
                        @foreach ($lapakdesas as $data)
                            <img src="{{ asset($data->image) }}" alt="" class="object-cover w-full h-fit]">
                        @endforeach
                        {{-- <img src="./assets/img/UPACARA.jpg" alt="" class="object-cover w-full h-[inherit]">
                    <img src="./assets/img/FOTBAR-VOLI.jpg" alt="" class="object-cover w-full h-[inherit]">
                    <img src="./assets/img/pose-nasional.jpg" alt="" class="object-cover w-full h-[inherit]"> --}}
                    </div>
                    <div class="absolute bottom-0 w-full p-6 bg-transparent text-sm text-white font-poppins font-medium">
                        <div class="flex flex-row">
                            <div href="/showcase/lapak"
                                class="bg-secondary hover:bg-amber-400 transition duration-300 ease-in-out px-3 py-1 rounded-s-md">
                                <i class="fa-solid fa-store"></i>
                            </div><a href="/showcase/lapak"
                                class="bg-primary hover:bg-primaryhover transition duration-300 ease-in-out px-3 py-1 rounded-e-md">
                                Lihat Produk
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-10 md:mx-20 ">
            <div class="container mx-auto">
                <h1 class="text-center text-2xl md:text-5xl font-inter font-bold">
                    <span>Aparatur </span><span><span class="text-primary">Desa</span></span>
                </h1>
                <div class="relative overflow-x-auto py-8 scroll-container font-dmsans">
                    <div class="flex space-x-8 md:px-5">
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/haris2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Mokhamad Haris Nasution</h3>
                                <p>Kepala Desa</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/yaya2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Yaya Rusyaman</h3>
                                <p>Sekretaris</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/ina2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Ina Rodiah</h3>
                                <p>Keuangan</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/enok2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Enok Sopiatul Hasanah</h3>
                                <p>Perencanaan</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/didin2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Didin</h3>
                                <p>Umum</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/nana2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Nana</h3>
                                <p>Pemerintahan</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/parid2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Parid Hasanudin, ST</h3>
                                <p>Pelayanan</p>
                            </div>
                        </div>
                        <!-- Aparatur Item -->
                        <div class="relative w-56 flex-shrink-0">
                            <img src="./assets/img/aparat-desa/edi2.png" alt="Foto Aparatur"
                                class="w-full h-72 object-cover rounded-lg hover:brightness-75 transition-all duration-[1200ms] transform hover:scale-110">
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-transparent bg-opacity-50 text-white p-4 text-center">
                                <h3 class="text-xl font-semibold">Edi Junaedi</h3>
                                <p>Kesejahteraan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="container mx-auto py-10 md:py-20">
        <div id="contact" class="mx-10 md:mx-20">
            <div class="flex justify-between items-center">
                <h1 class="flex flex-col md:flex-row md:gap-4 text-2xl md:text-5xl font-inter font-bold">
                    <span>Maju, </span><span><span class="text-primary">Mandiri!
                            {{-- </span> There!</span> --}}
                </h1>
                <div class="hidden md:flex bg-black rounded-full">
                    <div class="flex justify-between text-lg">
                        <button class="p-1">
                            <i
                                class="fa-solid fa-arrow-right bg-white rounded-full p-3 hover:bg-gray-100 transition duration-300 ease-in-out"></i>
                        </button>
                        <button onclick="window.location.href='https://wa.me/6285223303712';"
                            class="text-sm bg-primary rounded-full py-3 px-6 font-semibold hover:bg-primaryhover text-white transition duration-300 ease-in-out">
                            Hubungi Kami
                        </button>
                    </div>
                </div>
            </div>
            <hr class="border-t-[1px] border-gray-300 mt-10 mb-10" />

            <div class="flex flex-col md:grid md:grid-cols-3 py-0 md:py-5 gap-16">
                <div class="order-3 md:order-1">
                    <div class="flex flex-col gap-y-8">
                        <div class="flex items-center">
                            <a href="#"><img src="/assets/img/mountain.png" class="h-7"
                                    alt="" /></a>
                            <a href="#"
                                class="ml-3 text-xl text-gray-800 font-medium font-faktum">SI<b>PAGUNG</b></a>
                        </div>
                        <p class="text-sm md:text-base text-gray-500 font-dm-sans">
                            Website Resmi Pemerintah <br />Desa Payungagung, Kecamatan Panumbangan, Kabupaten Ciamis.
                        </p>
                        <div class="flex flex-row space-x-3">
                            <a href="" target="_blank">
                                <i
                                    class="fa-brands fa-square-facebook text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                            </a>
                            <a href="https://www.instagram.com/desa.payungagung" target="_blank">
                                <i
                                    class="fa-brands fa-instagram text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                            </a>

                            <a href="https://youtube.com/@mdchannel70?si=6lA2Kt_1nT10aoLa" target="_blank">
                                <i
                                    class="fa-brands fa-youtube text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                            </a>
                            <a href="https://wa.me/6285223303712" target="_blank">
                                <i
                                    class="fa-brands fa-whatsapp text-white p-4 rounded-full bg-primary hover:bg-primaryhover transition duration-300 ease-in-out"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2 grid grid-cols-2 font-dm-sans">
                    <div>
                        <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                            Navigasi
                        </h3>
                        <div class="flex flex-col gap-y-5">
                            <a href="#" class="text-gray-500 text-xs md:text-sm">Beranda</a>
                            <a href="#" class="text-gray-500 text-xs md:text-sm">Profil</a>
                            <a href="#" class="text-gray-500 text-xs md:text-sm">Demografi</a>
                            <a href="/showcase/lapak" class="text-gray-500 text-xs md:text-sm">Potensi</a>
                            <a href="/showcase/berita" class="text-gray-500 text-xs md:text-sm">Berita</a>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                            Kontak
                        </h3>
                        <div class="flex flex-col gap-y-5">
                            <h5 class="text-gray-500 text-xs md:text-sm">
                                +62-8522-3024-909
                            </h5>
                            <h5 class="text-gray-500 text-xs md:text-sm">
                                www.example.com
                            </h5>
                            <h5 class="text-gray-500 text-xs md:text-sm">
                                name@gmail.com
                            </h5>
                            <h5 class="text-gray-500 text-xs md:text-sm">
                                6 Rancapetir Street,<br />Ciamis 46211
                            </h5>
                            <h5 class="text-gray-500 text-xs md:text-sm">Blogs</h5>
                            <h5 class="text-gray-500 text-xs md:text-sm">FAQs</h5>
                        </div>
                    </div>
                </div>
                <div class="order-2 md:order-3">
                    <h3 class="text-base md:text-lg text-primary font-nunito mb-7 font-semibold">
                        Dapatkan informasi terbaru
                    </h3>
                    <div class="bg-gray-100 rounded-lg flex overflow-hidden">
                        <input type="email" placeholder="Alamat email"
                            class="py-2 px-4 bg-gray-100 text-gray-700 focus:outline-none focus:ring-primary" />
                        <button
                            class="bg-primary hover:bg-primaryhover rounded-tr-lg rounded-br-lg p-4 flex items-center justify-center text-white transition duration-300 ease-in-out">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <hr class="border-t-[1px] border-gray-300 mt-14 mb-14" />

            <div
                class="flex flex-col md:flex-row md:justify-between text-center md:text-justify text-gray-800 font-dm-sans text-sm md:text-base">
                <h5>
                    Copyright &copy;
                    <a href="https://instagram.com/ffahrimf" target="_blank"
                        class="text-primary">SI<b>PAGUNG</b></a>. All
                    Rights Reserved.
                </h5>
                <h5 class="hidden md:inline">
                    <a class="hover:text-primary transition duration-300 ease-in-out" href="">User Terms &
                        Conditions</a> | <a class="hover:text-primary transition duration-300 ease-in-out"
                        href="">Privacy Policy</a>
                </h5>
            </div>
        </div>
    </section>

    <script>
        function openNavbar() {
            let navbar = document.getElementById("navbar");
            navbar.classList.toggle("hidden");
        }

        lottie.loadAnimation({
            container: document.getElementById("lottie"),
            renderer: "svg",
            loop: true,
            autoplay: true,
            path: "./assets/img/portfolio/about-animation.json",
        });

        document.addEventListener("DOMContentLoaded", () => {
            const links = document.querySelectorAll(".nav-link");

            for (const link of links) {
                link.addEventListener("click", (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute("href");

                    if (targetId === "#") {
                        window.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        });
                    } else {
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: "smooth"
                            });
                        }
                    }
                });
            }
        });


        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('bg-navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('bg-white');
            } else {
                navbar.classList.remove('bg-white');
            }
        });
    </script>

    <script>
        function toggleDropdownProfil(event) {
            event.preventDefault();
            event.stopPropagation();
            const dropdownMenu = document.getElementById('dropdownMenuProfil');
            dropdownMenu.classList.toggle('hidden');
        }

        function toggleDropdownDemo(event) {
            event.preventDefault();
            event.stopPropagation();
            const dropdownMenu = document.getElementById('dropdownMenuDemo');
            dropdownMenu.classList.toggle('hidden');
        }

        function toggleDropdownPotensi(event) {
            event.preventDefault();
            event.stopPropagation();
            const dropdownMenu = document.getElementById('dropdownMenuPotensi');
            dropdownMenu.classList.toggle('hidden');
        }

        // Event listener to close the dropdown when clicking outside of it
        document.addEventListener('click', function(event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownToggle = event.target.closest('a.nav-link');
            if (!dropdownToggle && !dropdownMenu.classList.contains('hidden')) {
                dropdownMenu.classList.add('hidden');
            }
        });

        window.addEventListener('click', function(event) {
            const dropdowns = ['dropdownMenuProfil', 'dropdownMenuDemo', 'dropdownMenuPotensi'];
            dropdowns.forEach(function(id) {
                const dropdownMenu = document.getElementById(id);
                if (!dropdownMenu.classList.contains('hidden') && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>

    <script>
        // JavaScript to automatically switch the carousel images
        const carouselWrapper = document.querySelector('.carousel-wrapper');
        let currentIndex = 0;

        setInterval(() => {
            currentIndex = (currentIndex + 1) % 3;
            carouselWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        }, 5000); // Change image every 3 seconds
    </script>
    <script>
        // JavaScript to automatically switch the carousel images
        const carouselLapak = document.querySelector('.carousel-lapak');
        let currentIndexLapak = 0;

        setInterval(() => {
            currentIndexLapak = (currentIndexLapak + 1) % 3;
            carouselLapak.style.transform = `translateX(-${currentIndexLapak * 100}%)`;
        }, 5000); // Change image every 3 seconds
    </script>

</body>

</html>
