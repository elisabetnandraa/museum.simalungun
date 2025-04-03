<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('assets.style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Museum Simalungun</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>
</head>
<body class="font-poppins">
    @include('layouts.user.navbar')
    <main class="pt-10">
        <section>
            <div class="container mx-auto px-4 mb-16">
                <h1 class="text-2xl md:text-3xl font-bold text-center mb-8">KOLEKSI MUSEUM</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($koleksis as $koleksi)
                    <div class="bg-black rounded-lg overflow-hidden shadow-lg">
                        <div class="p-3">
                            <img src="{{ asset($koleksi->gambar) }}" alt="{{ $koleksi->judul }}" class="w-full h-64 object-cover rounded">
                        </div>
                        <div class="p-4 text-white">
                            <h3 class="font-bold">{{ $koleksi->judul }}</h3>
                            <p class="text-gray-300 text-sm mt-2">
                                {{ Str::limit($koleksi->deskripsi, 100) }}
                            </p>
                            <div class="mt-4">
                                <button onclick="window.location.href='{{ route('detailkoleksi', $koleksi->id) }}'" class="bg-red-600 hover:bg-red-700 text-white py-1 px-4 rounded-full text-sm">
                                    Selengkapnya
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>
