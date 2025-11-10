@extends('layouts.main')
@section('title', 'Manajemen Data Role User')
@section('content')

    <div class="content-box">

        <h1>Manajemen Data Role User</h1>
        <p>Berikut adalah daftar user dan role yang terdaftar di sistem.</p>

        <div class="mb-3">
            <a href="#" class="btn btn-primary">Tambah Role ke User</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->nama }}</td>
                        <td>
                            {{ $user->roles->first()->nama_role ?? 'Belum punya role' }}
                        </td>
                        <td>
                            <a href="#" class="btn btn-blue">Edit</a>
                            <a href="#" class="btn btn-red">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data user masih kosong.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
    </div>
    @endsection