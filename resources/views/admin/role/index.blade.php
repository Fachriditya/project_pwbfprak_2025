@extends('layouts.admin')
@section('title', 'Daftar Role')
@section('content')

    <h1>Daftar Role</h1>
    <p>Berikut adalah daftar role yang terdaftar di sistem.</p>

    <div class="mb-3">
        <a href="#" class="btn btn-primary">Tambah Role</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama Role</th>
                <th style="text-align: right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($roles as $role)
                <tr>
                    <td>{{ $role->nama_role }}</td>
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
