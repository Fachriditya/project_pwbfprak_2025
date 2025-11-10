@extends('layouts.main')
@section('title', 'Manajemen Data User')
@section('content')

    <div class="content-box">

        <h1>Daftar User</h1>
        <p>Berikut adalah daftar user yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah User</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->iduser }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-right">
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Data masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
    @endsection