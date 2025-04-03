<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('assets.style')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Museum Simalungun</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>
</head>

<body class="font-poppins">
    @include('layouts.user.navbar')
    <main class="pt-10">
    <section>
    <div class="mx-auto px-4 mb-12 flex justify-center items-center min-h-screen">
        <!-- Card dengan border hitam dan background hitam - ukuran diperbesar -->
        <div class="max-w-lg bg-black border border-gray-800 rounded-lg overflow-hidden shadow-lg mx-auto">
            <!-- Gambar dengan rasio aspek yang tetap -->
            <div class="relative h-80">
                <img class="absolute w-full h-full object-cover object-center" src="{{ asset($koleksi->gambar) }}" alt="{{ $koleksi->judul }}">
            </div>
            
            <!-- Konten Card -->
            <div class="p-6 text-white">
                <!-- Judul -->
                <h2 class="text-2xl font-bold mb-3">{{ $koleksi->judul }}</h2>
                
                <!-- Deskripsi -->
                <p class="text-sm mb-4">{{ $koleksi->deskripsi }}</p>
                
                <!-- Tombol Kembali -->
                <div class="flex justify-center mt-4">
                    <a href="{{ route('tamu.koleksi.show') }}" class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 text-white font-medium rounded-full text-sm px-5 py-2 text-center">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    </main>
    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>
