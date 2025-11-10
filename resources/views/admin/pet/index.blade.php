@extends('layouts.main')
@section('title', 'Manajemen Data Pet')
@section('content')

    <div class="content-box">

        <h1>Manajemen Data Pet</h1>
        <p>Berikut adalah daftar hewan peliharaan yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Data Pet Baru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pet</th>
                    <th>Pemilik</th>
                    <th>Jenis Hewan</th>
                    <th>Ras Hewan</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pets as $pet)
                    <tr>
                        <td>{{ $pet->idpet }}</td>
                        <td>{{ $pet->nama_pet }}</td>
                        <td>{{ $pet->pemilik->user->nama ?? 'N/A' }}</td> 
                        <td>{{ $pet->jenisHewan->nama_jenis_hewan ?? 'N/A' }}</td>
                        <td>{{ $pet->rasHewan->nama_ras_hewan ?? 'N/A' }}</td>
                        <td>{{ \Carbon\Carbon::parse($pet->tgl_lahir)->format('d-m-Y') }}</td>
                        <td>
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Data Pet masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
    </div>
    @endsection