@extends('layouts.main')
@section('title', 'Manajemen Data Pemilik')
@section('content')
    <div class="content-box">
        <h1>Manajemen Data Pemilik</h1>
        <p>Berikut adalah daftar pemilik hewan yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Pemilik Baru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID Pemilik</th>
                    <th>Nama User</th>
                    <th>No. WA</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pemilik as $item)
                    <tr>
                        <td>{{ $item->idpemilik }}</td>
                        <td>{{ $item->user?->nama ?? 'N/A' }}</td>
                        <td>{{ $item->no_wa }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td class="text-right">
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data pemilik yang terdaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection