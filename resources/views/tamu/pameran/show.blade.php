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
    <section class="bg-white py-8">
      <div class="container mx-auto px-4">
        <!-- Flex container for the section -->
        <div class="flex flex-col md:flex-row gap-8 items-center">
          <!-- Left side - Text content -->
          <div class="w-full md:w-1/3">
            <h2 class="text-2xl font-bold uppercase mb-2">PAMERAN</h2>
            <p class="text-gray-700">Temukan jadwal Pameran budaya kami yang menampilkan koleksi unik dan acara spesial di Museum Simalungun</p>
          </div>
          
          <div class="w-full md:w-2/3">
            <div id="pameran-carousel" class="relative w-full">
                <div class="relative overflow-hidden rounded-lg">
                    <div class="flex transition-transform duration-500 ease-in-out">
                        @foreach ($pamerans as $pameran)
                            <div class="min-w-0 flex-shrink-0 w-full md:w-1/2 px-2 flex flex-col items-center">
                                <img src="{{ asset($pameran->gambar) }}" alt="{{ $pameran->judul }}" class="w-full h-auto rounded-lg shadow-md" />
                                <p class="text-sm text-center mt-2">{{ $pameran->judul }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
        
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        
            
        </div>
    </div>

      <!-- Required JavaScript for the carousel functionality -->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const carousel = document.getElementById('pameran-carousel');
          const carouselItems = carousel.querySelector('.flex');
          const items = carouselItems.querySelectorAll('div[class^="min-w-0"]');
          const itemCount = items.length;
          let currentIndex = 0;
          
          const prevButton = carousel.querySelector('[data-carousel-prev]');
          const nextButton = carousel.querySelector('[data-carousel-next]');
          
          function updateCarousel() {
            const translateX = -currentIndex * 100;
            carouselItems.style.transform = `translateX(${translateX}%)`;
          }
          
          prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + itemCount) % itemCount;
            updateCarousel();
          });
          
          nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % itemCount;
            updateCarousel();
          });
          
          // Initialize the carousel
          updateCarousel();
        });
      </script>
    </section>
    </main>
    @include('layouts.user.footer')
    @include('assets.js')
</body>
</html>