<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Info;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index()

    {
        $berita = Berita::orderBy('id', 'DESC')->limit(6)->get();
        $info = Info::orderBy('id', 'DESC')->limit(6)->get();
        return view('client/index', compact('berita', 'info'));
    }
    public function selengkapnya($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('client/selengkapnya', compact('berita'));
    }
}
