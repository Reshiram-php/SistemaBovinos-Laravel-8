<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermisosController extends Controller
{
    public function __construct()
    {
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
        $this->middleware('can:permisos.index')->only('index');
    }
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::get();

        return view('permisos.index', compact('roles', 'permissions'));
    }



    public function givePermissionToRole(Request $request)
    {
        try {
            $input = $request->all();
            $role = Role::findOrfail($input['roleId']);
            $role->givePermissionTo($input['permission']);
        } catch (\Throwable $th) {
        }
    }

    public function revokePermissionToRole(Request $request)
    {
        try {
            $input = $request->all();
            $role = Role::findOrfail($input['roleId']);
            $role->revokePermissionTo($input['permission']);
        } catch (\Throwable $th) {
        }
    }
}
