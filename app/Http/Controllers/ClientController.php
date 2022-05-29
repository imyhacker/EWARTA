<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Berita;
use App\Models\Tentang;
use App\Models\Aplikasi;
use App\Models\Tag;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Index()

    {
        $berita = Berita::orderBy('id', 'DESC')->limit(6)->get();
        $info = Info::orderBy('id', 'DESC')->limit(6)->get();
        $depan1 = Aplikasi::first();
        $depan2 = Aplikasi::first();
        $t = \App\Models\Tentang::first();


        $tb = Berita::count();
        $tbh = Berita::whereDate('created_at', date('Y-m-d'))->count();
        $ti = Info::count();
        $tih = Info::whereDate('created_at', date('Y-m-d'))->count();

        return view('client/index', compact('berita', 'info', 'depan1', 'depan2', 'tb', 'tbh', 'ti', 'tih', 't'));
    }
    public function selengkapnya($slug)
    {
        $depan1 = Aplikasi::first();
        $tag = Tag::all();
        $berita = Berita::where('slug', $slug)->first();
        $acak = Berita::inRandomOrder()->limit(4)->get();
        $terbaru = Berita::latest('created_at')->limit(4)->get();
        //dd($berita_baru->judul);
        return view('client/selengkapnya', compact('berita', 'depan1', 'tag', 'acak', 'terbaru'));
    }
    public function selengkapnya_info($slug_info)
    {
        $depan1 = Aplikasi::first();
        $info = Info::where('slug_info', $slug_info)->first();
        return view('client/selengkapnya_info', compact('info', 'depan1'));

    }
    public function tentang_kami()
    {
        $depan1 = Aplikasi::first();
        $tentang = Tentang::first();
        return view('client/tentang/index', compact('depan1', 'tentang'));
    }
    public function informasi()
    {
        $depan1 = Aplikasi::first();
        $info = Info::orderBy('id', 'DESC')->get();
        $tentang = Tentang::first();

        return view('client/informasi/index', compact('depan1', 'info', 'tentang'));
    }
    public function berita()
    {
        $depan1 = Aplikasi::first();
        $berita = berita::orderBy('id', 'DESC')->get();
        $tentang = Tentang::first();

        return view('client/berita/index', compact('depan1', 'berita', 'tentang'));
    }
}
