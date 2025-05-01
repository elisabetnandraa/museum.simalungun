<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('assets.style')
@vite(['resources/css/app.css','resources/js/app.js'])
<title>Museum Simalungun - Bayar</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body class="font-poppins bg-gray-50">
@include('layouts.user.navbar') 

<div class="container mx-auto py-12 px-4 text-center flex flex-col items-center justify-center">
    <img src="{{ asset('assets/img/logomuseum.png') }}" alt="Logo" class="w-28 md:w-36 mb-6">
    <h2 class="text-3xl font-bold mb-3 text-gray-800">Silakan Selesaikan Pembayaran</h2>
    <p class="text-gray-600 max-w-xl mb-6">
        Anda akan diarahkan ke halaman pembayaran Midtrans untuk menyelesaikan transaksi.
        Mohon pastikan data Anda sudah benar.
    </p>
    <button id="pay-button" class="bg-[#A91B0D] hover:bg-red-800 text-white font-bold py-3 px-6 rounded shadow-md transition-all duration-200">
        Bayar Sekarang
    </button>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

<script type="text/javascript">
    document.getElementById('pay-button').addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
            onSuccess: function (result) {
                alert("Pembayaran berhasil!");
                window.location.href = "{{ route('tamu.informasitiket.show') }}";
            },
            onPending: function (result) {
                alert("Menunggu pembayaran Anda!");
            },
            onError: function (result) {
                alert("Pembayaran gagal!");
            }
        });
    });
</script>
@include('layouts.user.footer')
@include('assets.js')


</body>
</html>

