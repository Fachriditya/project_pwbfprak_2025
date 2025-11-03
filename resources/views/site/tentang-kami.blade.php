@extends('layouts.app')
@section('title', 'Tentang Kami - RSHP UNAIR')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main pages/site/tentang-kami.css') }}">
@endpush

@section('content')

<div class="about-container">
    <header class="about-header">
        <h1>Tentang Rumah Sakit Hewan Pendidikan UNAIR</h1>
        <p>Komitmen kami untuk kesehatan dan kesejahteraan hewan kesayangan Anda.</p>
    </header>

    <div class="about-content">
        
        <section class="vision-mission">
            <div class="info-card">
                <h2>Visi Kami</h2>
                <p>Menjadi rumah sakit hewan pendidikan terkemuka di tingkat nasional dan internasional yang berlandaskan moral, etika, dan kesejahteraan hewan.</p>
            </div>
            <div class="info-card">
                <h2>Misi Kami</h2>
                <ul>
                    <li>Menyelenggarakan pelayanan kesehatan hewan yang profesional dan paripurna.</li>
                    <li>Menjadi pusat rujukan diagnostik dan terapeutik penyakit hewan.</li>
                    <li>Mengembangkan penelitian di bidang kedokteran hewan veteriner.</li>
                    <li>Menyelenggarakan pendidikan dan pelatihan bagi calon dokter hewan.</li>
                </ul>
            </div>
        </section>

        <section class="history-section">
            <div class="history-text">
                <h2>Profil RSHP UNAIR</h2>
                <p>Didirikan pada tahun XXXX, RSHP UNAIR berawal dari sebuah klinik sederhana yang didedikasikan untuk memberikan pelayanan terbaik bagi hewan kesayangan dan ternak.</p>
                <p>Seiring berjalannya waktu dan meningkatnya kebutuhan masyarakat akan layanan kesehatan hewan yang berkualitas, kami terus berkembang hingga menjadi pusat rujukan veteriner yang modern dan terpercaya di Indonesia.</p>
            </div>
            <div class="history-video">
                <video controls autoplay muted loop>
                    <source src="{{ asset('videos/Profil RSHP.mp4') }}" type="video/mp4">
                </video>
            </div>
        </section>

    </div>
</div>

@endsection

