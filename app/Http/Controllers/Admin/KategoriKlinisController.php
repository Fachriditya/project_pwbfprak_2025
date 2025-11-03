<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriKlinis;

class KategoriKlinisController extends Controller
{
    public function index()
    {
        $kategoriKlinis = KategoriKlinis::orderBy('nama_kategori_klinis', 'asc')->get();
        return view('admin.kategori-klinis.index', [
            'kategoriKlinis' => $kategoriKlinis
        ]);
    }
}