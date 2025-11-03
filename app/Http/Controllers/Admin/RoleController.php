<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('nama_role', 'asc')->get();
        return view('admin.role.index', [
            'roles' => $roles
        ]);
    }
}