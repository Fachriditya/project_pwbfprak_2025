<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin RSHP')</title>
    

    <link rel="stylesheet" href="{{ asset('css/user pages/admin/admin-styles.css') }}">
    
    @stack('styles')
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="#">RSHP Admin</a>
        </div>
        <ul class="sidebar-nav">
             <li><a href="#">Dashboard</a></li>
            <li><a href="{{ route('admin.user.index') }}">Data User</a></li>
            <li><a href="{{ route('admin.role.index') }}">Data Role</a></li>
            <li><a href="{{ route('admin.jenis-hewan.index') }}">Data Jenis Hewan</a></li>
            <li><a href="{{ route('admin.ras-hewan.index') }}">Data Ras Hewan</a></li>
            <li><a href="#">Data Pemilik</a></li> <!-- (Ganti # jika sudah dibuat) -->
            <li><a href="{{ route('admin.pet.index') }}">Data Pet</a></li>
            <li><a href="{{ route('admin.kategori.index') }}">Data Kategori</a></li>
            <li><a href="{{ route('admin.kategori-klinis.index') }}">Data Kategori Klinis</a></li>
            <li><a href="{{ route('admin.tindakan-terapi.index') }}">Data Kode Tindakan Terapi</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </aside>


    <main class="content">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
