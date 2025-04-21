<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Anda Berhasil Dipesan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center;">


    <div class="bg-white bg-opacity-90 backdrop-blur-md rounded-xl shadow-2xl max-w-md w-full p-8">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-red-700">Tiket Museum Kami</h2>
            <p class="text-sm text-gray-600 mt-1">Nomor Tiket: <span class="font-medium text-black">{{ $pesanan->nomor_tiket }}</span></p>
        </div>
        <div class="space-y-4 text-gray-700">
            <div>
                <p><strong>Nama:</strong> {{ $pesanan->nama_lengkap }}</p>
            </div>
            <div>
                <p><strong>Jumlah Tiket:</strong> {{ $pesanan->jumlah }}</p>
            </div>
            <div>
                <p><strong>Tanggal Pemesanan:</strong> {{ $pesanan->tanggal_pemesanan }}</p>
            </div>
        </div>
        <div class="mt-6 text-center text-sm text-gray-500">
            <p>Terima kasih telah memesan tiket di Museum Kami!</p>
        </div>
    </div>

</body>
</html>
