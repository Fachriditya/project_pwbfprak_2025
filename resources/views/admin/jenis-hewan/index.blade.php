@extends('layouts.main')
@section('title', 'Daftar Jenis Hewan')
@section('content')

    <div class="content-box">

        <h1>Data Jenis Hewan</h1>
        <p>Berikut adalah daftar jenis hewan yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="{{ route('admin.jenis-hewan.create') }}" class="btn btn-primary">Tambah Jenis Hewan</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Jenis Hewan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($jenisHewan as $hewan)
                    <tr>
                        <td>{{ $hewan->idjenis_hewan }}</td>
                        <td>{{ $hewan->nama_jenis_hewan }}</td>
                        <td>
                            <a href="{{ route('admin.jenis-hewan.edit', $hewan->idjenis_hewan) }}" class="btn btn-blue">Edit</a>
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

    </div> @endsection