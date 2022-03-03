<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function index()
    {
        $data = Aplikasi::first();
        return view('Dashboard.pengaturan.index', compact('data'));
    }
    public function upload_setting(Request $request)
    {
        $cek = Aplikasi::first();
        $file = $request->file('foto_depan');
        if($cek == null){
            if($file == null){
            $data = Aplikasi::create([
                'nama_aplikasi' => $request->input('nama_aplikasi'),
                'yel_yel' => $request->input('yel_yel'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'alamat' => $request->input('alamat'),
            ]);
            return redirect()->back()->with('sukses', 'Berhasil Update Data');
            }else{
                $path = 'gambar_depan';
                $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
                $file->move($path, $name);
                $data = Aplikasi::create([
                    'foto_depan' => $name,
                    'nama_aplikasi' => $request->input('nama_aplikasi'),
                    'yel_yel' => $request->input('yel_yel'),
                    'email' => $request->input('email'),
                    'telepon' => $request->input('telepon'),
                    'alamat' => $request->input('alamat'),
                ]);
                return redirect()->back()->with('sukses', 'Berhasil Update Data');
            }
        }else{
            if($file == null){
                $data = Aplikasi::first()->update([
                    'nama_aplikasi' => $request->input('nama_aplikasi'),
                    'yel_yel' => $request->input('yel_yel'),
                    'email' => $request->input('email'),
                    'telepon' => $request->input('telepon'),
                    'alamat' => $request->input('alamat'),
                ]);
                return redirect()->back()->with('sukses', 'Berhasil Update Data');
                }else{
                    $path = 'gambar_depan';
                    $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
                    $file->move($path, $name);
                    $data = Aplikasi::first()->update([
                        'foto_depan' => $name,
                        'nama_aplikasi' => $request->input('nama_aplikasi'),
                        'yel_yel' => $request->input('yel_yel'),
                        'email' => $request->input('email'),
                        'telepon' => $request->input('telepon'),
                        'alamat' => $request->input('alamat'),
                    ]);
                    return redirect()->back()->with('sukses', 'Berhasil Update Data');
                }
        }
        
    }
}
