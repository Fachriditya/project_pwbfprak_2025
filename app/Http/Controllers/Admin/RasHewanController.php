<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisHewan;

class RasHewanController extends Controller
{
    public function index()
    {

        $dataJenisHewan = JenisHewan::with('rasHewan')->get();

        return view('admin.ras-hewan.index', compact('dataJenisHewan'));
    }
}
