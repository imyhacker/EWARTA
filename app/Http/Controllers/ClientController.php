<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use App\Models\Berita;
use App\Models\Info;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index()

    {
        $berita = Berita::orderBy('id', 'DESC')->limit(6)->get();
        $info = Info::orderBy('id', 'DESC')->limit(6)->get();
        $depan1 = Aplikasi::first();
        $depan2 = Aplikasi::first();

        return view('client/index', compact('berita', 'info', 'depan1', 'depan2'));
    }
    public function selengkapnya($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('client/selengkapnya', compact('berita'));
    }
}
