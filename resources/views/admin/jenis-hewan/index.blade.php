@extends('layouts.admin')
@section('title', 'Daftar Jenis Hewan')
@section('content')

    <h1>Data Jenis Hewan</h1>
    <p>Berikut adalah daftar jenis hewan yang terdaftar di sistem.</p>

    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Tambah Jenis Hewan</a>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama Jenis Hewan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisHewan as $hewan)
                <tr>
                    <td>{{ $hewan->nama_jenis_hewan }}</td>
                    <td>
                        <a href="#" class="btn btn-blue">Edit</a>
                        <a href="#" class="btn btn-red">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection