@extends('layouts.site')

@section('title', 'Layanan Kami - RSHP UNAIR')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main pages/site/layanan.css') }}">
@endpush

@section('content')
<div class="services-container">
    <header class="services-header">
        <h1>Layanan Unggulan Kami</h1>
        <p>Menyediakan berbagai layanan medis veteriner dengan dukungan teknologi terkini dan tim profesional.</p>
    </header>

    <div class="services-content">
        <div class="service-card">
            <h2>Layanan Bedah</h2>
            <div class="service-category">
                <div class="category-column">
                    <h3>Tindakan Bedah Minor</h3>
                    <ul>
                        <li>Jahit Luka</li>
                        <li>Kastrasi (Kebiri)</li>
                        <li>Othematoma (Penanganan Hematoma Telinga)</li>
                        <li>Scaling & Root Planning (Pembersihan Karang Gigi)</li>
                        <li>Ekstraksi Gigi</li>
                    </ul>
                </div>
                <div class="category-column">
                    <h3>Tindakan Bedah Mayor</h3>
                    <ul>
                        <li>Gastrotomi, Entrotomi, Enterektomi</li>
                        <li>Bedah Toraks (Rongga Dada)</li>
                        <li>Ovariohisterektomi (Sterilisasi Betina) & Sectio Caesar</li>
                        <li>Sistotomi (Bedah Kandung Kemih) & Uretrostomi</li>
                        <li>Penanganan Fraktur Tulang</li>
                        <li>Perbaikan Hernia (Diafragmatika, Perinealis, Inguinalis)</li>
                        <li>Eksisi (Pengangkatan) Tumor</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="service-card">
            <h2>Layanan Diagnostik</h2>
            <p class="service-description">Menggunakan peralatan canggih untuk diagnosis yang akurat dan cepat.</p>
            <div class="service-category">
                <div class="category-column">
                    <h3>Laboratorium Klinik</h3>
                    <ul>
                        <li>Pemeriksaan Darah Lengkap</li>
                        <li>Tes Biokimia Darah</li>
                        <li>Pemeriksaan Urin (Urinalisis)</li>
                        <li>Tes Parasitologi (Feses & Darah)</li>
                    </ul>
                </div>
                <div class="category-column">
                    <h3>Pencitraan Medis (Imaging)</h3>
                    <ul>
                        <li>Radiografi (Sinar-X) Digital</li>
                        <li>Ultrasonografi (USG) Abdomen & Jantung</li>
                        <li>Endoskopi Diagnostik</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="service-card">
            <h2>Perawatan Umum & Pencegahan</h2>
            <p class="service-description">Menjaga kesehatan hewan Anda secara preventif untuk kualitas hidup yang lebih baik.</p>
            <div class="service-category">
                <div class="category-column">
                    <h3>Konsultasi & Pemeriksaan</h3>
                    <ul>
                        <li>Pemeriksaan Kesehatan Rutin (General Check-up)</li>
                        <li>Konsultasi Gizi dan Diet</li>
                        <li>Manajemen Berat Badan</li>
                        <li>Perawatan Geriatrik (Hewan Senior)</li>
                    </ul>
                </div>
                <div class="category-column">
                    <h3>Vaksinasi & Program Preventif</h3>
                    <ul>
                        <li>Vaksinasi Inti dan Non-Inti</li>
                        <li>Program Anti Parasit (Kutu, Cacing)</li>
                        <li>Pemasangan Microchip Identitas</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection