<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('evento.index');
    }

    public function notifications()
    {
        $postnotifications= auth()->user()->unreadNotifications;
        return view('notificaciones',compact('postnotifications'));        
    }
    public function inotifications($id)
    {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        return back();     
    }
}
