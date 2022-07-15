<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (request()->ajax()) {
            $user = User::get();
            return datatables()
                ->of($user)
                ->addColumn('pdf', function ($pdf) {
                    return '<a href="' . route('usuarios.edit', $pdf->id) . '">
                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="editar"><i class="ti-pencil"></i>
                    </button></a>';
                })
                ->rawColumns(['pdf'])
                ->make(true);
        }

        return view('usuarios.index');
    }

    public function create()
    {
        return view("usuarios.register");
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
            return view("usuarios.edit", ["user" => $user]);
    }

    public function update(Request $request,$id)
    {
        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id.',id',
            'password' =>'required|string|min:8|confirmed',
        ]);
        $user=User::findOrFail($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->update();
        return redirect('usuarios');

    }
}
