<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemilik; 

class PemilikController extends Controller
{
    public function index()
    {
        $pemilik = Pemilik::with('user')->orderBy('idpemilik', 'desc')->get();
        return view('admin.pemilik.index', compact('pemilik'));
    }
}