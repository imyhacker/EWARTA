<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        return view('Dashboard.pengaturan.index');
    }
    public function upload_setting(Request $request)
    {
        $cek = Aplikasi::where('id', 1)->first();
        if($cek == Null){

        }
        // if ($request->hasFile('foto_depan') == true) {
        //     $file = $request->file('foto_depan');
        //     $path = 'gambar_depan';
        //     $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
        //     $file->move($path, $name);
        //     $data = Aplikasi::create([
        //         'foto_depan' => $name,
        //         'nama_aplikasi' => $request->input('nama_aplikasi'),
        //         'yel_yel' => $request->input('yel_yel'),
        //         'email' => $request->input('email'),
        //         'telepon' => $request->input('telepon'),
        //         'alamat' => $request->input('alamat'),
        //     ]);
        //     return redirect()->back()->with('sukses', 'Berhasil Update Data');
        // }
        // elseif ($request->hasFile('foto_depan') == false) {
        //     $data = Aplikasi::create([
        //         'nama_aplikasi' => $request->input('nama_aplikasi'),
        //         'yel_yel' => $request->input('yel_yel'),
        //         'email' => $request->input('email'),
        //         'telepon' => $request->input('telepon'),
        //         'alamat' => $request->input('alamat'),
        //     ]);
        //     return redirect()->back()->with('sukses', 'Berhasil Update Data');    
        // }
    }
}
