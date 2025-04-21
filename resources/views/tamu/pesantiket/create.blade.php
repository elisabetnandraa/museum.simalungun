@extends('layouts.app')
@section('title', 'Pesan Tiket')
@section('content')
<div class="container mx-auto px-4 py-8">
    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white shadow-md rounded p-6">
            <h1 class="text-xl font-bold mb-2">Tiket masuk Museum Simalungun Kota Pematangsiantar</h1>
            <p class="mb-6 text-sm">Pengunjung langsung menuju pintu masuk dan menunjukkan tiket kepada petugas</p>
            
            <form action="{{ route('tamu.pesantiket.preview') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="tanggal_pemesanan" class="block text-sm font-bold mb-2">Pilih Tanggal</label>
                    <div class="relative">
                        <input type="date" placeholder="Pilih tanggal" id="tanggal_pemesanan" name="tanggal_pemesanan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="jumlah" class="block text-sm font-bold mb-2">Jumlah</label>
                    <div class="flex items-center">
                        <button type="button" id="decrease" class="bg-white border rounded-l p-2 focus:outline-none">
                            <span class="text-xl">−</span>
                        </button>
                        <input type="text" id="jumlah" name="jumlah" value="1" min="1" class="border-t border-b w-10 py-2 text-center focus:outline-none" required>
                        <button type="button" id="increase" class="bg-white border rounded-r p-2 focus:outline-none">
                            <span class="text-xl">+</span>
                        </button>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-sm font-bold mb-2">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        value="{{ Auth::user()->name }}" readonly
                        class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-100 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-not-allowed">
                </div>
                
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="no_telepon" class="block text-sm font-bold mb-2">No Telepon</label>
                        <input type="tel" id="no_telepon" name="no_telepon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            value="{{ Auth::user()->email }}" readonly
                            class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-100 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-not-allowed" required>
                    </div>
                    
                </div>
                
                <div class="mb-6">
                    <h3 class="font-bold mb-1">Harga Total</h3>
                    <p id="harga-display" class="text-md">Rp 5.000</p>
                    <input type="hidden" id="total_harga" name="total_harga" value="5000" required>
                </div>
                
                <input type="hidden" name="status" value="belum">
                
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline">
                    Pesan Tiket
                </button>
            </form>
        </div>
        
        <div>
            <div class="mb-6">
                <img src="{{ asset('assets/img/museum.jpg') }}" alt="Museum Simalungun" class="w-full rounded">
                <div class="absolute top-1/4 right-0 pr-8">
                    <h2 class="text-white text-3xl font-bold text-right">WELCOME TO</h2>
                    <h2 class="text-white text-3xl font-bold text-right">MUSEUM</h2>
                    <h2 class="text-white text-3xl font-bold text-right">SIMALUNGUN</h2>
                </div>
            </div>
            
            <div class="bg-white shadow-md rounded p-6">
                <h3 class="text-lg font-bold mb-2">Tiket masuk Museum Simalungun Kota Pematangsiantar</h3>
                <p class="text-sm mb-2">Tiket tidak bisa reschedule dan tidak bisa refund</p>
                <p class="font-bold">Harga Tiket : Rp 5.000,00</p>
            </div>
        </div>
    </div>
    
    <div class="mt-10">
        <h2 class="text-lg font-bold mb-4">Panduan Membeli Tiket Museum Simalungun:</h2>
        <ol class="list-decimal ml-5 space-y-1">
            <li>Klik tombol "<span class="font-bold">Beli Tiket</span>" untuk memulai proses pemesanan.</li>
            <li>Isi formulir pemesanan tiket sesuai petunjuk yang diberikan, lalu klik tombol "<span class="font-bold">Lanjut</span>".</li>
            <li>Pilih metode pembayaran yang tersedia, kemudian klik tombol "<span class="font-bold">Bayar</span>".</li>
            <li>Selesaikan proses pembayaran sesuai petunjuk yang diberikan.</li>
            <li>Tunggu notifikasi konfirmasi bahwa pembayaran Anda berhasil.</li>
            <li>Tiket elektronik akan dikirimkan langsung ke alamat email Anda.</li>
        </ol>
    </div>
</div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const jumlahInput = document.getElementById('jumlah');
        const totalHargaInput = document.getElementById('total_harga');
        const hargaDisplay = document.getElementById('harga-display');
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');
        const hargaTiket = 5000;
        
        function updateTotal() {
            const jumlah = parseInt(jumlahInput.value) || 1;
            const total = jumlah * hargaTiket;
            totalHargaInput.value = total;
            hargaDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
        }
        
        decreaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(jumlahInput.value);
            if (currentValue > 1) {
                jumlahInput.value = currentValue - 1;
                updateTotal();
            }
        });
        
        increaseBtn.addEventListener('click', function() {
            let currentValue = parseInt(jumlahInput.value);
            jumlahInput.value = currentValue + 1;
            updateTotal();
        });
        
        jumlahInput.addEventListener('input', function() {
            if (this.value < 1 || isNaN(this.value)) this.value = 1;
            updateTotal();
        });
        
        const dateInput = document.getElementById('tanggal_pemesanan');
    });
</script>
@endsection