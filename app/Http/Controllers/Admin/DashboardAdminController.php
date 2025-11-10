<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Pet;
use App\Models\JenisHewan;
use App\Models\RasHewan;
use App\Models\Kategori;
use App\Models\KategoriKlinis;
use App\Models\TindakanTerapi;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', [
            'totalRole'             => Role::count(),
            'totalRoleUser'         => RoleUser::count(),
            'totalPet'              => Pet::count(),
            'totalJenis'            => JenisHewan::count(),
            'totalRas'              => RasHewan::count(),
            'totalKategori'         => Kategori::count(),
            'totalKategoriKlinis'   => KategoriKlinis::count(),
            'totalTindakanTerapi'   => TindakanTerapi::count(),
        ]);
    }
}
