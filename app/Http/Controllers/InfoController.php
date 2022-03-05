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
    public function edit($id)
    {
        $data = Info::find($id);
        return view('Dashboard.info.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('foto') == true) {
            $file = $request->file('foto');
        $path = 'gambar_info';
        $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
        $file->move($path, $name);

        $judul = $request->input('judul');
        $isi = $request->input('isi');

        $data = Info::find($id)->update([
            'foto' => $name,
            'judul' => $judul,
            'isi' => $isi,
            'uploader' => Auth::user()->name
        ]);
        return redirect()->back()->with('sukses', 'Data berhasil Di Update');
        }
        elseif ($request->hasFile('foto') == false) {
            $judul = $request->input('judul');
        $isi = $request->input('isi');

        $data = Info::find($id)->update([
            'judul' => $judul,
            'isi' => $isi,
            'uploader' => Auth::user()->name
        ]);
        return redirect()->route('info')->with('sukses', 'Data berhasil Di Update');
        }


    }
    public function hapus_info($id)
    {
        $data = Info::find($id)->delete();
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }
}
