@extends('layouts.admin')
@section('title', 'Daftar Ras Hewan')
@section('content')

    <h1>Daftar Ras Hewan</h1>
    <p>Berikut adalah daftar ras hewan yang terdaftar di sistem.</p>
    
    <a href="#" class="btn btn-primary" style="margin-bottom: 20px;">Tambah Ras Baru</a>

    <table class="admin-table">
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
                                <td rowspan="{{ $jenis->rasHewan->count() }}" class="valign-top">
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
@endsection