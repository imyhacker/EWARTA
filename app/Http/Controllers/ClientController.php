<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index()

    {
        $berita = Berita::orderBy('id', 'DESC')->simplePaginate(6);
        return view('client/index', compact('berita'));
    }
    public function selengkapnya($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('client/selengkapnya', compact('berita'));
    }
}
