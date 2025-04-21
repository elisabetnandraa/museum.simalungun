<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('assets.style')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{ $tiket->judul ?? 'Museum Simalungun' }}</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.0/flowbite.min.js"></script>
</head>
<body class="font-poppins">
    @include('layouts.user.navbar')
    <main class="pt-10">
    <section>
    <div class="container mx-auto px-4 mb-16">
    <h1 class="text-center font-bold text-xl mb-4">TIKET MUSEUM</h1>

        <div class="bg-white rounded-3xl border border-gray-200 shadow-md overflow-hidden mb-6">
            <div class="relative">
                <img src="{{ asset($tiket->gambar ?? 'assets/img/default.jpg') }}" alt="Gambar Tiket" class="w-full h-auto">
            </div>

            <div class="p-6">
                <p class="text-gray-800 mb-6">
                    {{ $tiket->deskripsi }}
                </p>

                <p class="text-gray-800 font-semibold mb-6">
                    Harga: Rp {{ number_format($tiket->harga, 0, ',', '.') }}
                </p>

                <div class="flex justify-center">
                    <button onclick="window.location.href='{{ route('tamu.pesantiket.create') }}'" type="button" class="px-4 py-2 bg-red-700 text-white font-medium rounded-md hover:bg-red-800">
                        Beli Tiket
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <h2 class="font-semibold mb-2">Panduan Membeli Tiket Museum Simalungun:</h2>
            <ol class="list-decimal list-inside ml-2 text-sm text-gray-700 space-y-1">
                <li>Klik tombol "<span class="font-semibold">Beli Tiket</span>" untuk memulai proses pemesanan.</li>
                <li>Isi formulir pemesanan tiket sesuai petunjuk yang diberikan, lalu klik tombol "<span class="font-semibold">Lanjut</span>".</li>
                <li>Pilih metode pembayaran yang tersedia, kemudian klik tombol "<span class="font-semibold">Bayar</span>".</li>
                <li>Selesaikan proses pembayaran sesuai petunjuk yang diberikan.</li>
                <li>Tunggu notifikasi konfirmasi bahwa pembayaran Anda berhasil.</li>
                <li>E-tiket akan otomatis terkirim ke email yang Anda daftarkan.</li>
            </ol>
        </div>
    </div>
    </section>
    </main>
    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>
