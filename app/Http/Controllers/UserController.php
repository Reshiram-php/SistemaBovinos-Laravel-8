<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
        $this->middleware('can:usuarios.index')->only('index');
        $this->middleware('can:usuarios.create')->only('create');
        $this->middleware('can:usuarios.edit')->only('edit');
        $this->middleware('can:usuarios.delete')->only('delete');
    }

    public function index(Request $request)
    {
        if (request()->ajax()) {
            $user = User::get();
            return datatables()
                ->of($user)
                ->addColumn('rol', function ($rol) {
                    $roles2 = $rol->roles->first()->name;
                    return $roles2;
                })
                ->addColumn('pdf', function ($pdf) {
                    return '<a href="' . route('usuarios.edit', $pdf->id) . '">
                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="editar"><i class="ti-pencil"></i>
                    </button></a>
                    <button class="btn btn-warning btn-sm" onclick="eliminar(event,\''.$pdf->id.'\',\''.$pdf->name.'\')" data-toggle="tooltip" data-placement="top"
                    title="eliminar"><i class="ti-trash"></i>
                </button>
                    ';
                })
                ->rawColumns(['pdf'])
                ->make(true);
        }

        return view('usuarios.index');
    }

    public function create()
    {
        $roles =Role::all();
        return view('usuarios.create', ["roles"=>$roles]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required',
        ]);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        $user->roles()->sync($request->get('rol'));
        return redirect('usuarios')->with('creacion', 'ok');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles2 = $user->roles->first()->id;
        $roles =Role::all();
        return view("usuarios.edit", ["user" => $user,"roles"=>$roles,"nombre"=>$roles2]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id . ',id',
            'password' => 'required|string|min:8|confirmed',
            'rol' => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->update();
        $user->roles()->sync($request->get('rol'));
        return redirect('usuarios')->with('actualizacion', 'ok');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('usuarios')->with('eliminacion', 'ok');
    }
}
