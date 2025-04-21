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
    <div class="container mx-auto px-4 mb-16">
        <div class="grid md:grid-cols-2 gap-6 p-4">
            <!-- Museum Image Section -->
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('assets/img/bukutamu.jpg') }}" alt="Museum Simaulgun" class="w-full h-auto object-cover">
            </div>
            
            <!-- Guest Book Form Section -->
            <div class="bg-red-700 rounded-lg shadow-lg p-6 text-white">
                <div class="flex justify-center mb-4">
                    <img src="{{ asset('assets/img/logo-museum.png') }}" alt="Museum Logo" class="h-32">
                </div>
                <h2 class="text-xl font-bold text-center mb-4">BUKU TAMU</h2>
                
                @if(session('sukses'))
                    <div class="bg-green-300 text-red-900 rounded px-4 py-2 mb-4">
                        {{ session('sukses') }}
                    </div>
                @endif
        
                <form action="{{ route('buku-tamu.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block mb-1">Nama</label>
                        <input type="text" name="nama" id="nama" class="w-full rounded-md border-gray-300 bg-white text-gray-800 p-2.5" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="tanggal_kunjungan" class="block mb-1">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" class="w-full rounded-md border-gray-300 bg-white text-gray-800 p-2.5" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="alamat" class="block mb-1">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="w-full rounded-md border-gray-300 bg-white text-gray-800 p-2.5" required>
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 bg-white text-red-700 font-medium rounded-md hover:bg-gray-100">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Reviews Section -->
        <div class="mt-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">ULASAN</h2>
                <button data-modal-target="ulasanModal" data-modal-toggle="ulasanModal" type="button" class="flex items-center text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-lg text-sm px-5 py-2.5">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                    Tambah Ulasan
                </button>
                
            </div>
            
        <div class="mt-8">
            @foreach ($ulasans as $ulasan)
                <div class="bg-white p-4 rounded-lg shadow mb-4">
                    <h3 class="font-semibold">{{ $ulasan->nama }}</h3>
                    <p>{{ $ulasan->ulasan }}</p>
                </div>
            @endforeach
        </div>

        <!-- Modal -->
<div id="ulasanModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="ulasanModal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
            <div class="p-6 space-y-6">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Ulasan</h3>
                <form action="{{ route('tamu.ulasan.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block mb-1 text-sm font-medium text-black">Nama</label>
                        <input type="text" name="nama" id="nama" class="w-full rounded-md border-gray-300 p-2.5 text-black" required>
                    </div>                    
                    <div class="mb-4">
                        <label for="ulasan" class="block mb-1 text-sm font-medium text-black">Ulasan</label>
                        <textarea name="ulasan" id="ulasan" rows="4" class="w-full rounded-md border-gray-300 p-2.5 text-gray-900" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 rounded-lg text-white hover:opacity-90" style="background-color: #A91B0D;">
                            Kirim
                        </button>
                    </div>                    
                </form>
            </div>
        </div>
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