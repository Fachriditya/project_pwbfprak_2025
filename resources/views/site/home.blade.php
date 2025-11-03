@extends('layouts.app')
@section('title', 'Kontak Kami - RSHP UNAIR')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main pages/site/home.css') }}">
@endpush

@section('content')

<div class="home-container">
    <div class="home-content">
        <h1>Rumah Sakit Hewan Pendidikan UNAIR</h1>
        <p>Berinovasi untuk selalu meningkatkan kualitas pelayanan
            demi kesehatan dan kesejahteraan hewan kesayangan
            Anda melalui pendaftaran online yang lebih mudah.</p>
        <a href="#" class="cta-button">LOGIN SEKARANG</a>
    </div>
</div>

@endsection

