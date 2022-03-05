<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        $berita = Berita::orderBy('id', 'DESC')->get();
        return view('Dashboard/berita', compact('tag', 'berita'));
    }
    public function upload_tag(Request $request)
    {
        $data = $request->input('tag');
        Tag::create([
            'tag' => $data,
            'slug_tag' => \Str::slug($data)
        ]);
        return redirect()->back()->with('sukses', 'SUKSES UPLOAD DATA TAG');
    }
    public function hapus_tag($id)
    {
        Tag::find($id)->delete();
        return redirect()->back()->with('sukses', 'SUKSES HAPUS DATA TAG');

    }
    public function upload_berita(Request $request)
    {
        $request->validate([
            'gambar' => 'required|mimes:jpg,png,jpeg,svg',
            'judul' => 'required',
            'tag'   => 'required',
            'isi'   => 'required',
        ]);
        $gambar = $request->file('gambar');
        $name = date('YmdHis').'.'.$gambar->getClientOriginalExtension();
        $path = public_path('gambar');
        $gambar->move($path, $name);
       
        Berita::create([
            'foto' => $name,
            'judul' => $request->input('judul'),
            'tag'   => $request->input('tag'),
            'isi'   => $request->input('isi'),
            'slug'  => \Str::random(6),
        ]);
        return redirect()->back()->with('sukses', 'SUKSES UPLOAD DATA BERITA');
    }
    public function edit($id)
    {
        $data = Berita::find($id);
        $tag = Tag::all();
        return view('Dashboard/edit_berita', compact('data', 'tag'));
    }
    public function update(Request $request, $id)
    {
        $data = Berita::find($id)->update($request->all());
        return redirect()->route('berita')->with('sukses', 'SUKSES UPDATE DATA BERITA');

    }
    public function hapus_berita($id)
    {
        Berita::find($id)->delete();
        return redirect()->back()->with('sukses', 'SUKSES HAPUS DATA BERITA');

    }
}
