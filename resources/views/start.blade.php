<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Selamat Datang di Sistem Informasi Desa Payungagung</title>
</head>
<body>
@include('sweetalert::alert') 
  <div class="h-screen flex flex-col gap-3 justify-center items-center">
  <h1 class="flex justify-center items-center font-semibold text-4xl font-montserrat">Showcase</h1>
  <a href="/login" class="bg-teal-600 hover:bg-teal-700 transition ease-in-out duration-300 px-4 py-1 text-white rounded-lg flex justify-center items-center ">Log in</a>
  </div>
</body>`
</html>