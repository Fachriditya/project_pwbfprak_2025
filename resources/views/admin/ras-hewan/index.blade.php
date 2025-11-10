@extends('layouts.main')
@section('title', 'Manajemen Data Ras Hewan')
@section('content')

    <div class="content-box">

        <h1>Manajemen Data Ras Hewan</h1>
        <p>Berikut adalah daftar ras hewan yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Ras Baru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Jenis Hewan</th>
                    <th>Ras</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataJenisHewan as $jenis)
                    @if ($jenis->rasHewan->count() > 0)
                        @foreach ($jenis->rasHewan as $index => $ras)
                            <tr>
                                @if ($index == 0)
                                    <td rowspan="{{ $jenis->rasHewan->count() }}" class="valign-middle">
                                        {{ $jenis->nama_jenis_hewan }}
                                    </td>
                                @endif
                                <td>{{ $ras->nama_ras }}</td>
                                <td>
                                    <a href="#" class="btn btn-blue">Edit</a>
                                    <a href="#" class="btn btn-red">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endforeach
            </tbody>
        </table>
    
    </div>
    @endsection