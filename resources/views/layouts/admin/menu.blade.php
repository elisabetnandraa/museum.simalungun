<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link text-white {{(Request::routeIs('admin.dashboard') ? 'active':'')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-white">
                <i class="nav-icon fas fa-home"></i>  
                <p>
                    Kelola Beranda
                    <i class="right fas fa-angle-left"></i> 
                </p>
            </a>
            <!-- Submenu -->
            <ul class="nav nav-treeview" style="background-color: white; padding: 10px; border-radius: 5px;">
                <li class="nav-item">
                    <a href="{{route('admin.berita.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.berita.index') ? 'active':'')}}">
                        <i class="fas fa-newspaper nav-icon"></i> 
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.profil.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.profil.index') ? 'active':'')}}">
                        <i class="fas fa-building nav-icon"></i> 
                        <p>Profil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.subprofil.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.subprofil.index') ? 'active':'')}}">
                        <i class="fas fa-scroll nav-icon"></i>
                        <p>SubProfil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.jadwal.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.jadwal.index') ? 'active':'')}}">
                        <i class="fas fa-calendar-alt nav-icon"></i> 
                        <p>Jadwal</p>
                    </a>
                </li>
            </ul>
        </li>
    
        <li class="nav-item">
            <a href="{{route('admin.galeri.index')}}" class="nav-link text-white {{(Request::routeIs('admin.galeri.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-image"></i> 
                <p>Galeri</p>
            </a>
        </li>
                       
        <li class="nav-item">
            <a href="{{route('admin.koleksi.index')}}" class="nav-link text-white {{(Request::routeIs('admin.koleksi.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-boxes"></i>
                <p>Koleksi</p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{route('admin.pameran.index')}}" class="nav-link text-white {{(Request::routeIs('admin.pameran.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-briefcase"></i> 
                <p>Pameran</p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{route('admin.bukutamu.index')}}" class="nav-link text-white {{(Request::routeIs('admin.bukutamu.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-book-open"></i> 
                <p>Buku Tamu</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.ulasan.index')}}" class="nav-link text-white {{(Request::routeIs('admin.ulasan.index') ? 'active':'')}}">
                <i class="nav-icon fas fa-star"></i>
                <p>Ulasan</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-white">
                <i class="nav-icon fas fa-ticket-alt"></i> 
                <p>
                    Kelola Tiket
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview" style="background-color: white; padding: 10px; border-radius: 5px;">
                <li class="nav-item">
                    <a href="{{route('admin.informasitiket.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.informasitiket.index') ? 'active':'')}}">
                        <i class="fas fa-info nav-icon"></i>
                        <p>Informasi Tiket</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.pesantiket.index')}}" class="nav-link text-dark {{(Request::routeIs('admin.pesantiket.index') ? 'active':'')}}">
                        <i class="nav-icon fas fa-ticket-alt"></i> 
                        <p>Tiket</p>
                    </a>
                </li>
            </ul>
        </li>                                                                                       
        <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                @csrf
            </form>
            <a href="#" class="nav-link text-white @yield('')"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>          
    </ul>
</nav>