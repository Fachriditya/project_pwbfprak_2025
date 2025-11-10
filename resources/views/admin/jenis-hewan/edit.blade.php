@extends('layouts.main')
@section('title', 'Edit Jenis Hewan')

@section('content')

    <div class="content-box">
        
        <h1>Edit Jenis Hewan</h1>
        <p>Silakan ubah nama jenis hewan di bawah ini.</p>

        <form action="{{ route('admin.jenis-hewan.update', $jenisHewan->idjenis_hewan) }}" method="POST">
            @csrf          @method('PUT') <div class="mb-3">
                <label for="nama_jenis_hewan" class="form-label">Nama Jenis Hewan:</label>
                <input type="text" 
                       class="form-control"
                       id="nama_jenis_hewan" 
                       name="nama_jenis_hewan" 
                       value="{{ old('nama_jenis_hewan', $jenisHewan->nama_jenis_hewan) }}" {{-- Tampilkan data lama --}}
                       required>
                
                @error('nama_jenis_hewan')
                    <div style="color: red; font-size: 0.9em; margin-top: 5px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-default">Batal</a>
        </form>

    </div>

@endsection