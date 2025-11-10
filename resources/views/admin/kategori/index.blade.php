    @extends('layouts.main')
    @section('title', 'Manajemen Data Kategori')
    @section('content')

        <div class="content-box">

            <h1>Daftar Kategori</h1>
            
            <div class="mb-3">
                <a href="#" class="btn btn-primary">Tambah Kategori Baru</a>
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kategori as $item)
                        <tr>
                            <td>{{ $item->idkategori }}</td>
                            <td>{{ $item->nama_kategori }}</td>
                            <td>
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
        
        </div>
        
    @endsection