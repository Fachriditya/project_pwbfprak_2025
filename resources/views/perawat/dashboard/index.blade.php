@extends('layouts.main')

@section('title', 'Dashboard Perawat')

@section('content')
    <div class="content-box mb-3">
        <h1>Halo, Perawat!</h1>
        <p>
            Selamat datang, <strong>{{ session('user_name', 'Perawat') }}</strong>.
        </p>
        <p>Silakan pilih menu di sidebar untuk mulai bekerja.</p>
    </div>
@endsection