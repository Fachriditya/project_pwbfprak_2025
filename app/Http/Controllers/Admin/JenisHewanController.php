<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisHewan;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class JenisHewanController extends Controller
{
    public function index()
    {
        $jenisHewan = JenisHewan::all();
        return view('admin.jenis-hewan.index', compact('jenisHewan'));
    }

    /**
     * Tampilkan form untuk menambah data baru.
     */
    public function create()
    {
        return view('admin.jenis-hewan.create');
    }

    /**
     * Simpan data baru ke database menggunakan Query Builder.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis_hewan' => 'required|string|max:255|unique:jenis_hewan,nama_jenis_hewan',
        ], [
            'nama_jenis_hewan.required' => 'Nama jenis hewan tidak boleh kosong!',
            'nama_jenis_hewan.unique' => 'Nama jenis hewan ini sudah ada.',
        ]);

        try {
            DB::table('jenis_hewan')->insert([
                'nama_jenis_hewan' => $request->nama_jenis_hewan,
            ]);

            return redirect()->route('admin.jenis-hewan.index')
                             ->with('success', 'Data jenis hewan berhasil ditambahkan!');

        } catch (\Exception $e) {
            return redirect()->back()
                             ->with('error', 'Terjadi kesalahan saat menyimpan data.')
                             ->withInput();
        }
    }

    /**
     * Tampilkan form untuk mengedit data.
     */
    public function edit($id)
    {
        // Ambil data lama berdasarkan ID menggunakan Query Builder
        $jenisHewan = DB::table('jenis_hewan')->where('idjenis_hewan', $id)->first();

        // Jika data tidak ditemukan, lempar ke index
        if (!$jenisHewan) {
            return redirect()->route('admin.jenis-hewan.index')->with('error', 'Data tidak ditemukan.');
        }

        // Tampilkan view 'edit' dan kirim data lama ke dalamnya
        return view('admin.jenis-hewan.edit', compact('jenisHewan'));
    }

    /**
     * Update data di database menggunakan Query Builder.
     */
    public function update(Request $request, $id)
    {
        // 1. Validasi Input
        $request->validate([
            'nama_jenis_hewan' => [
                'required',
                'string',
                'max:255',
                // Pastikan nama unik, KECUALI untuk ID yang sedang diedit ini
                Rule::unique('jenis_hewan', 'nama_jenis_hewan')->ignore($id, 'idjenis_hewan')
            ],
        ], [
            'nama_jenis_hewan.required' => 'Nama jenis hewan tidak boleh kosong!',
            'nama_jenis_hewan.unique' => 'Nama jenis hewan ini sudah ada.',
        ]);

        // 2. Update ke Database (Pakai Query Builder)
        try {
            DB::table('jenis_hewan')
                ->where('idjenis_hewan', $id) // Cari data berdasarkan ID
                ->update([
                    'nama_jenis_hewan' => $request->nama_jenis_hewan,
                    // 'updated_at' => now(), // (Jika tabelmu pakai timestamps)
                ]); 

            // 3. Redirect kembali ke index dengan pesan sukses
            return redirect()->route('admin.jenis-hewan.index')
                             ->with('success', 'Data jenis hewan berhasil di-update!');

        } catch (\Exception $e) {
            // Jika gagal
            return redirect()->back()
                             ->with('error', 'Terjadi kesalahan saat meng-update data.')
                             ->withInput();
        }
    }
}