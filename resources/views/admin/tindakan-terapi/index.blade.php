@extends('layouts.main')
@section('title', 'Daftar Tindakan Terapi')
@section('content')

    <div class="content-box">

        <h1>Daftar Tindakan Terapi</h1>
        <p>Berikut adalah daftar kode tindakan dan terapi yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Tindakan</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Kategori Klinis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tindakan as $item)
                    <tr>
                        <td>{{ $item->kode }}</td>
                        <td>{{ $item->deskripsi_tindakan_terapi }}</td>
                        <td>{{ $item->kategori->nama_kategori ?? 'N/A' }}</td>
                        <td>{{ $item->kategoriKlinis->nama_kategori_klinis ?? 'N/A' }}</td>
                        <td>
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
    </div>
    @endsection