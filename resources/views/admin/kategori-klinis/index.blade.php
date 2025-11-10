@extends('layouts.main')
@section('title', 'Manajemen Data Kategori Klinis')
@section('content')

    <div class="content-box">

        <h1>Manajemen Data Kategori Klinis</h1>
        
        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Kategori Klinis Baru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kategori Klinis</th> 
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategoriKlinis as $item)
                    <tr>
                        <td>{{ $item->idkategori_klinis }}</td>
                        <td>{{ $item->nama_kategori_klinis }}</td>
                        <td>
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
    </div>
    @endsection