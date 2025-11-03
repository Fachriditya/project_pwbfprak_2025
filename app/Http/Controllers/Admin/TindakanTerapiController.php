<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TindakanTerapi;

class TindakanTerapiController extends Controller
{
    public function index()
    {
        $tindakan = TindakanTerapi::with(['kategori', 'kategoriKlinis'])
                                    ->orderBy('kode', 'asc')
                                    ->get();
        
        return view('admin.tindakan-terapi.index', [
            'tindakan' => $tindakan
        ]);
    }
}