@extends('layouts.admin')
@section('title', 'Daftar Pet')
@section('content')

    <h1>Daftar Pet</h1>
    <p>Berikut adalah daftar pet yang terdaftar di sistem.</p>

    <div class="mb-3">
        <a href="#" class="btn btn-primary">Tambah Pet</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Hewan</th>
                <th>Ras Hewan</th>
                {{-- <th>Pemilik</th> --}}
                <th style="text-align: right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pets as $pet)
                <tr>
                    <td>{{ $pet->nama }}</td>
                    <td>{{ $pet->jenisHewan->nama_jenis_hewan ?? 'N/A' }}</td>
                    <td>{{ $pet->rasHewan->nama_ras ?? 'N/A' }}</td>
                    {{-- <td>{{ $pet->pemilik->user->nama ?? 'N/A' }}</td> --}}
                    <td style="text-align: right;">
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

@endsection
