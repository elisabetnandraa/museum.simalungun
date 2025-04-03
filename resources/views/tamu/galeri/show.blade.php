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
        <div class="container mx-auto px-4 mb-16">
            <h1 class="text-2xl md:text-3xl font-bold text-center mb-12">GALERI FOTO MUSEUM SIMALUNGUN</h1>
            
            <div class="max-w-6xl mx-auto">
                <!-- Looping untuk menampilkan data galeri -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($galeris as $galeri)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                            <div class="overflow-hidden">
                                <img src="{{ asset($galeri->gambar) }}" alt="{{ $galeri->keterangan }}" class="w-full h-56 object-cover transition duration-500 hover:scale-110">
                            </div>
                            <div class="p-4 text-center">
                                <p class="font-medium">{{ $galeri->keterangan }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>
