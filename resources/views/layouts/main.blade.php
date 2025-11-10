<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RSHP')</title>
    
    <link rel="stylesheet" href="{{ asset('css/user pages/admin/admin-styles.css') }}">
    
    @stack('styles')
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="#">
                @if (session('user_role') == 1)
                    RSHP Admin
                @elseif (session('user_role') == 4)
                    RSHP Resepsionis
                @elseif (session('user_role') == 2)
                    RSHP Dokter
                @elseif (session('user_role') == 3)
                    RSHP Perawat
                @elseif (session('user_role') == 5)
                    RSHP Pemilik
                @else
                    RSHP Panel
                @endif
            </a>
        </div>
        
        <ul class="sidebar-nav">

            @if (session('user_role') == 1)
                <li class="sidebar-label">DASHBOARD</li>
                <li><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                
                <li class="sidebar-label">DATA ADMINISTRASI</li>
                <li><a href="{{ route('admin.user.index') }}">Data User</a></li>
                <li><a href="{{ route('admin.role.index') }}">Data Role</a></li>
                
                <li class="sidebar-label">DATA MASTER</li>
                <li><a href="{{ route('admin.jenis-hewan.index') }}">Data Jenis Hewan</a></li>
                <li><a href="{{ route('admin.ras-hewan.index') }}">Data Ras Hewan</a></li>
                <li><a href="{{ route('admin.pemilik.index') }}">Data Pemilik</a></li>
                <li><a href="{{ route('admin.pet.index') }}">Data Pet</a></li>
                <li><a href="{{ route('admin.kategori.index') }}">Data Kategori</a></li>
                <li><a href="{{ route('admin.kategori-klinis.index') }}">Data Kategori Klinis</a></li>
                <li><a href="{{ route('admin.tindakan-terapi.index') }}">Data Tindakan Terapi</a></li>

            @elseif (session('user_role') == 4)
                <li class="sidebar-label">DASHBOARD</li>
                <li><a href="{{ route('resepsionis.dashboard.index') }}">Dashboard</a></li>
                
                <li class="sidebar-label">REGISTRASI</li>
                <li><a href="#">Registrasi Pemilik</a></li>
                <li><a href="#">Registrasi Pet</a></li>
                
                <li class="sidebar-label">JADWAL</li>
                <li><a href="#">Temu Dokter</a></li>
                

            @elseif (session('user_role') == 2)
            <li class="sidebar-label">DASHBOARD</li>
                <li><a href="{{ route('dokter.dashboard.index') }}">Dashboard</a></li>
                
                <li class="sidebar-label">PEKERJAAN</li>
                <li><a href="#">Jadwal Saya</a></li>
                <li><a href="#">Rekam Medis Pasien</a></li>

            @elseif (session('user_role') == 3)
            <li class="sidebar-label">DASHBOARD</li>
                <li><a href="{{ route('perawat.dashboard.index') }}">Dashboard</a></li>

                <li class="sidebar-label">PEKERJAAN</li>
                <li><a href="#">Kelola Perawatan</a></li>
                <li><a href="#">Rekam Medis Pasien</a></li>

            @endif
            <li class="sidebar-label">LOGOUT</li>
            <li class="sidebar-logout">
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
        </ul>
    </aside>


    <main class="content">
        @yield('content')
    </main>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @stack('scripts')
</body>
</html>