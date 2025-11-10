@extends('layouts.main')

@section('title', 'Dashboard Dokter')

@section('content')
    <div class="content-box mb-3">
        <h1>Halo, Dokter!</h1>
        <p>
            Selamat datang, <strong>{{ session('user_name', 'Dokter') }}</strong>.
        </p>
        <p>Silakan pilih menu di sidebar untuk mulai bekerja.</p>
    </div>
@endsection