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
    <main>
    <section>
<div class="relative w-full">
    <!-- Container dengan tinggi yang responsif -->
    <div class="h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] xl:h-screen">
        <!-- Gambar dengan overlay dan responsif -->
        <div class="absolute inset-0 w-full h-full">
            <img 
                src="{{ asset('assets/img/museum.jpg') }}" 
                alt="Museum Simalungun" 
                class="w-full h-full object-cover brightness-100"
                loading="lazy"
            >
        </div>
    </div>
</div>
</section>
<section class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-center mb-12">Berita</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        @foreach($beritas as $item)
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="{{ $item->link }}">
                <img src="{{ asset($item->gambar) }}" class="rounded-t-lg w-full h-64 object-cover" alt="{{ $item->judul }}" />
            </a>
            <div class="p-5">
                <p class="mb-3 text-sm text-gray-700">{{ Str::limit($item->deskripsi, 100, '...') }}</p>
                <a href="{{ $item->link }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800">
                    Baca selengkapnya
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>


<section class="w-full bg-black text-white py-12 px-4 md:px-8">
    <div class="container mx-auto">
      <h2 class="text-xl md:text-2xl font-bold text-center mb-8 uppercase tracking-wider">
        SEJARAH MUSEUM SIMALUNGUN
      </h2>
      
      <div class="flex flex-col md:flex-row items-start gap-8">
        <!-- Text Content -->
        <div class="w-full md:w-2/3 space-y-6">
          @foreach ($profils as $profil)
            <p class="text-sm md:text-base leading-relaxed">
              {{ $profil->deskripsi }}
            </p>
          @endforeach
        </div>
        
        <!-- Image -->
        <div class="w-full md:w-1/4 mt-6 md:mt-0">
          @if ($profils->isNotEmpty() && $profils->first()->gambar)
            <div class="border-4 border-gray-200 p-1 bg-white">
              <img src="{{ asset($profils->first()->gambar) }}" alt="Museum Simalungun" class="w-full h-auto object-cover" />
            </div>
          @else
            <small class="text-gray-400">Gambar tidak tersedia</small>
          @endif
        </div>
      </div>
    </div>
  </section>
  

  <section class="w-full bg-white py-12 px-4 md:px-8 border-t border-b border-gray-200">
    <div class="container mx-auto">
      <div class="flex flex-col md:flex-row items-start gap-8">
        @foreach($subprofils as $item)
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
          <img src="{{ asset($item->gambar) }}" alt="Museum Image" 
            class="w-full h-auto border border-gray-300 shadow-sm" 
          />
        </div>
        
        <div class="w-full md:w-2/3 space-y-6">
          <p class="text-sm md:text-base leading-relaxed text-gray-800">
            {{ $item->penjelasan }}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="w-full relative">
    <!-- Full-width Gorga Batak pattern header -->
    <div class="w-full h-20 bg-cover bg-center">
      <img src="{{ asset('assets/img/gorga.png') }}" class="w-full h-full object-cover" alt="Gorga Batak Pattern" />
    </div>
    
    <!-- Content section -->
    <div class="flex flex-col md:flex-row -mt-8 my-8">
      <!-- Text content -->
      <div class="w-full md:w-1/2 p-8">
        <h1 class="text-3xl font-bold text-center mb-2 my-12">Rencanakan Kunjunganmu!</h1>
        
        <p class="text-center text-gray-700 mb-8 my-8">
          Temukan sejarah serta cerita menarik yang menunggu untuk dijelajahi.
        </p>
        
        <!-- Schedule box -->
        <div class="border border-gray-300 p-4 my-8">
          @foreach($jadwals as $jadwal)
          <div class="py-2 flex justify-between">
            <span>{{ $jadwal->hari }}</span>
            <span class="border-b border-dotted border-gray-400 flex-grow mx-2"></span>
            <span>{{ $jadwal->jam }}</span>
          </div>
          @endforeach
        </div>
      </div>
      
      <!-- Image section -->
      <div class="flex justify-center items-center w-1/8 md:w-1/2 bg-white-100 -mt-20">
        <img src="{{ asset('assets/img/last.png') }}" alt="Pengunjung Museum" class="w-3/4 h-3/4 object-cover" />
      </div>
    </div>
  </section>

    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>