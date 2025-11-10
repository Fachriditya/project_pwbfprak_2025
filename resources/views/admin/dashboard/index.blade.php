@extends('layouts.main')
@section('title', 'Dashboard Admin')
@section('content')
    
    <div class="content-box mb-3">
        <h1>Halo, admin!</h1>
        <p>
            Selamat datang di halaman Admin. Anda login sebagai 
            <strong>{{ session('user_role_name', 'Administrator') }}</strong>.
        </p>
    </div>

    <div class="content-box">   
        <h2>Statistik Data Master</h2>
        
        <div class="stat-grid">
            
            <div class="stat-card">
                <h3>Total Role</h3>
                <p>{{ $totalRole }}</p>
            </div>
            
            <div class="stat-card">
                <h3>Total User (Role)</h3>
                <p>{{ $totalRoleUser }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Pet</h3>
                <p>{{ $totalPet }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Jenis Hewan</h3>
                <p>{{ $totalJenis }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Ras Hewan</h3>
                <p>{{ $totalRas }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Kategori</h3>
                <p>{{ $totalKategori }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Kategori Klinis</h3>
                <p>{{ $totalKategoriKlinis }}</p>
            </div>

            <div class="stat-card">
                <h3>Total Tindakan Terapi</h3>
                <p>{{ $totalTindakanTerapi }}</p>
            </div>

            </div>
    </div>

@endsection