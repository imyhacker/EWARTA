<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
class InfoController extends Controller
{
    public function index()
    {
        $info = Info::orderBy('id', 'DESC')->get();
        return view('Dashboard.info.index', compact('info'));
    }
    public function upload_info(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $file = $request->file('foto');
        $path = 'gambar_info';
        $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
        $file->move($path, $name);

        $judul = $request->input('judul');
        $isi = $request->input('isi');

        $data = Info::create([
            'foto' => $name,
            'judul' => $judul,
            'isi' => $isi,
            'slug_info' => Str::slug($judul),
            'uploader' => Auth::user()->name
        ]);
        return redirect()->back()->with('sukses', 'Data berhasil diupload');
    }
}
