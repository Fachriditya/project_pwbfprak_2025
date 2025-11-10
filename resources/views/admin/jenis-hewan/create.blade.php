@extends('layouts.main')
@section('title', 'Tambah Jenis Hewan')

@section('content')
    <div class="content-box">
        <h1>Tambah Jenis Hewan Baru</h1>
        <p>Silakan masukkan nama jenis hewan yang ingin ditambahkan.</p>

        <form action="{{ route('admin.jenis-hewan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_jenis_hewan" class="form-label">Nama Jenis Hewan:</label>
                <input type="text" 
                       class="form-control"
                       id="nama_jenis_hewan" 
                       name="nama_jenis_hewan" 
                       value="{{ old('nama_jenis_hewan') }}"
                       required>
                
                @error('nama_jenis_hewan')
                    <div style="color: red; font-size: 0.9em; margin-top: 5px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-default">Batal</a>
        </form>
    </div>
@endsection