@extends('layouts.admin')
@section('title', 'Daftar Kategori')
@section('content')

    <h1>Data Kategori</h1>
    <p>Berikut adalah daftar kategori yang terdaftar di sistem.</p>

    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Tambah Kategori</a>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
                <tr>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="#" class="btn btn-blue">Edit</a>
                        <a href="#" class="btn btn-red">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection