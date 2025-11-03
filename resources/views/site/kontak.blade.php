@extends('layouts.app')
@section('title', 'Kontak Kami - RSHP UNAIR')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/main pages/site/kontak.css') }}">
@endpush

@section('content')

<div class="contact-container">
    <div class="contact-header">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu Anda. Silakan hubungi kami melalui detail di bawah ini atau kirimkan pesan melalui formulir.</p>
    </div>

    <div class="contact-content">

        <div class="contact-left-column">
            <div class="contact-info-card">
                <h3>Informasi Kontak</h3>
                <div class="info-item">
                    <strong>Alamat:</strong>
                    <p>Jl. Mulyorejo, Kampus C UNAIR, Surabaya, Jawa Timur 60115</p>
                </div>
                <div class="info-item">
                    <strong>Telepon:</strong>
                    <p>(031) 5992785</p>
                </div>
                <div class="info-item">
                    <strong>Email:</strong>
                    <p>rshp@unair.ac.id</p>
                </div>
            </div>

            <div class="map-card">
                <h3>Lokasi Kami</h3>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.876355448372!2d112.7830616152778!3d-7.25531817316531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9995c211c7b%3A0x8b19131753177899!2sRumah%20Sakit%20Hewan%20Pendidikan%20Universitas%20Airlangga!5e0!3m2!1sen!2sid!4v1661234567890!5m2!1sen!2sid" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="contact-right-column">
            <div class="contact-form-card">
                <h3>Kirim Pesan</h3>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan Anda</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="cta-button">Kirim Pesan</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
