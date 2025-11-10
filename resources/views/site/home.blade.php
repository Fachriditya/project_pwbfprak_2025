@extends('layouts.site')

@section('title', 'Selamat Datang di RSHP UNAIR')

@section('content')
    <main class="home-container">
        <div class="home-content">
            <h1>Rumah Sakit Hewan Pendidikan UNAIR</h1>
            <p>Berinovasi untuk selalu meningkatkan kualitas pelayanan
                demi kesehatan dan kesejahteraan hewan kesayangan
                Anda melalui pendaftaran online yang lebih mudah.</p>
            
            <a href="{{ route('login') }}" class="cta-button">LOGIN SEKARANG</a>
        </div>
    </main>
@endsection
