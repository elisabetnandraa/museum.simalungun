<nav class="bg-black px-4 py-2.5 fixed top-0 left-0 w-full z-50">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/img/logo-museum.png') }}" class="h-20 mr-2" alt="Museum Simalungun Logo" />
            <div class="flex flex-col text-white">
                <span class="text-xl font-semibold whitespace-nowrap">MUSEUM</span>
                <span class="text-xl font-semibold whitespace-nowrap">SIMALUNGUN</span>
            </div>
        </a>
        
        <div class="flex items-center lg:order-2">
            <!-- Menu items on the right side -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-300 px-2">Beranda</a>
                <a href="#" class="text-white hover:text-gray-300 px-2">Galeri</a>
                <a href="#" class="text-white hover:text-gray-300 px-2">Koleksi</a>
                <a href="#" class="text-white hover:text-gray-300 px-2">Pameran</a>
                <a href="#" class="text-white hover:text-gray-300 px-2">Buku Tamu</a>
                <a href="#" class="py-1.5 px-6 bg-red-700 rounded-md text-white hover:bg-red-800">Tiket</a>
                
                <!-- Desktop Search box -->
                <div class="relative">
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-3 pr-10 text-sm text-gray-700 border border-gray-300 rounded-lg bg-white focus:outline-none" placeholder="Search">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden justify-between items-center w-full lg:hidden lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Beranda</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Galeri</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Koleksi</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Pameran</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Buku Tamu</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white bg-red-700 hover:bg-red-800 rounded">Tiket</a>
                </li>
                <li class="mt-3">
                    <div class="relative">
                        <input type="text" id="search-navbar-mobile" class="block w-full p-2 pl-3 pr-10 text-sm text-gray-700 border border-gray-300 rounded-lg bg-white focus:outline-none" placeholder="Search">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="w-5 h-5 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="h-24"></div>