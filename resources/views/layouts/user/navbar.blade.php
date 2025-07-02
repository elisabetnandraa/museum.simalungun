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
                <a href="{{ route('tamu.dashboard') }}" class="text-white hover:text-gray-300 px-2">Beranda</a>
                <a href="{{ route('tamu.galeri.show') }}" class="text-white hover:text-gray-300 px-2">Galeri</a>
                <a href="{{ route('tamu.koleksi.show') }}" class="text-white hover:text-gray-300 px-2">Koleksi</a>
                <a href="{{ route('tamu.pameran.show') }}" class="text-white hover:text-gray-300 px-2">Pameran</a>
                <a href="{{ route('tamu.bukutamu.create') }}" class="text-white hover:text-gray-300 px-2">Buku Tamu</a>
                <a href="{{ route('tamu.informasitiket.show') }}" class="py-1.5 px-6 bg-red-700 rounded-md text-white hover:bg-red-800">Tiket</a>
                
@guest
<!-- Tampilkan tombol Login jika pengguna belum login -->
<a href="{{ route('login') }}" class="py-1.5 px-6 bg-gray-700 rounded-md text-white hover:bg-gray-800 flex items-center">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
    </svg>
    Login
</a>
@else
<!-- Tampilkan tombol Logout jika pengguna sudah login -->
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="py-1.5 px-6 bg-gray-700 rounded-md text-white hover:bg-gray-800 flex items-center">
    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"></path>
    </svg>
    Logout
</a>

<!-- Form untuk logout (tersembunyi) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
@endguest
                
            
            </div>
            
            <!-- Mobile menu button -->
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div class="hidden justify-between items-center w-full lg:hidden lg:w-auto lg:order-1" id="mobile-menu-2">
            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li><a href="{{ route('tamu.dashboard') }}" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Beranda</a></li>
                <li><a href="{{ route('tamu.galeri.show') }}" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Galeri</a></li>
                <li><a href="{{ route('tamu.koleksi.show') }}" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Koleksi</a></li>
                <li><a href="{{ route('tamu.pameran.show') }}" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Pameran</a></li>
                <li><a href="{{ route('tamu.bukutamu.create') }}" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-700 rounded">Buku Tamu</a></li>
                <li><a href="{{ route('tamu.informasitiket.show') }}" class="block py-2 pr-4 pl-3 text-white bg-red-700 hover:bg-red-800 rounded">Tiket</a></li>

                <!-- Tombol Logout di Mobile -->
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2 pr-4 pl-3 text-white bg-gray-700 hover:bg-gray-800 rounded flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"></path>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="h-24"></div>

<!-- Form Logout -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
