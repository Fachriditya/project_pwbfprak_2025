@extends('layouts.main')

@section('title', 'Dashboard Resepsionis')

@section('content')
    <div class="content-box mb-3">
        <h1>Halo, Resepsionis!</h1>
        <p>
            Selamat datang, <strong>{{ session('user_name', 'Resepsionis') }}</strong>.
        </p>
        <p>Silakan pilih menu di sidebar untuk mulai bekerja.</p>
    </div>
@endsection