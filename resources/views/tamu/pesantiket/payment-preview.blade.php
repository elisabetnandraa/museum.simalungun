@extends('layouts.app')

@section('title', 'Preview Pembayaran')

@section('content')
<div class="min-h-[calc(100vh-theme(space.24))] bg-cover bg-center flex items-center justify-center px-4 py-12" style="background-image: url('/assets/img/bgmuseum.png')">

    <div class="bg-white/80 backdrop-blur-md shadow-lg rounded-lg px-10 pt-8 pb-10 w-full max-w-3xl">
        <h1 class="text-2xl md:text-3xl text-center font-bold mb-6 text-gray-800">Konfirmasi Pemesanan</h1>

        <div class="space-y-3 text-gray-700">
            <p><strong>Nama:</strong> {{ $pemesanan['nama_lengkap'] }}</p>
            <p><strong>Email:</strong> {{ $pemesanan['email'] }}</p>
            <p><strong>No Telepon:</strong> {{ $pemesanan['no_telepon'] }}</p>
            <p><strong>Tanggal Pemesanan:</strong> {{ $pemesanan['tanggal_pemesanan'] }}</p>
            <p><strong>Jumlah Tiket:</strong> {{ $pemesanan['jumlah'] }}</p>
            <p><strong>Total Harga:</strong> Rp{{ number_format($pemesanan['total_harga']) }}</p>
        </div>

        <form action="{{ route('tamu.pesantiket.processPayment') }}" method="POST" class="mt-6 text-center">
            @csrf
            <button type="submit" class="bg-[#A91B0D] hover:bg-red-800 text-white font-bold py-2 px-8 rounded">
                Bayar Sekarang
            </button>
        </form>
    </div>
</div>
@endsection
