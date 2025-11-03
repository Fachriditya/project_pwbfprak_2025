@extends('layouts.admin')
@section('title', 'Daftar Kategori Klinis')
@section('content')

    <h1>Daftar Kategori Klinis</h1>
    <p>Berikut adalah daftar kategori klinis yang terdaftar di sistem.</p>

    <div class="mb-3">
        <a href="#" class="btn btn-primary">Tambah Kategori Klinis</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama Kategori Klinis</th>
                <th style="text-align: right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategoriKlinis as $item)
                <tr>
                    <td>{{ $item->nama_kategori_klinis }}</td>
                    <td style="text-align: right;">
                        <a href="#" class="btn btn-blue">Edit</a>
                        <a href="#" class="btn btn-red">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="text-center">Data masih kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection