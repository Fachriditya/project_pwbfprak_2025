@extends('layouts.admin')
@section('title', 'Daftar User')
@section('content')
    <h1>Daftar User</h1>
    <p>Berikut adalah daftar user yang terdaftar di sistem.</p>

    <div class="mb-3">
        <a href="#" class="btn btn-primary">Tambah User</a>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Role</th>
                <th style="text-align: right;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->nama }}</td>
                    <td>
                        {{ $user->roles->pluck('nama_role')->join(', ') ?: ' ' }}
                    </td>
                    <td style="text-align: right;">
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
@endsection