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
        $tb = \App\Models\Berita::count();
        $ti = \App\Models\Info::count();
        $app = \App\Models\Aplikasi::first();
        $tentang = \App\Models\Tentang::first();
        return view('Dashboard/index',compact('app','tentang','tb','ti'));
    }
}
