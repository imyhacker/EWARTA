<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use App\Models\Aplikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
                'judul_aplikasi' => $request->input('judul_aplikasi')
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
                    'judul_aplikasi' => $request->input('judul_aplikasi')

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
                        'judul_aplikasi' => $request->input('judul_aplikasi')

                    ]);
                    return redirect()->back()->with('sukses', 'Berhasil Update Data');
                }
        }
        
    }
    public function upload_tentang(Request $request)
    {
        $cek = Tentang::first();
        $file = $request->file('gambar');
        if($cek == null){
            if($file == null){
            $data = Tentang::create([
                'tentang' => $request->input('tentang'),
                
            ]);
            return redirect()->back()->with('sukses', 'Berhasil Update Data');
            }else{
                $path = 'gambar_tentang';
                $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
                $file->move($path, $name);
                $data = Tentang::create([
                    'gambar' => $name,
                    'tentang' => $request->input('tentang'),
                    
                ]);
                return redirect()->back()->with('sukses', 'Berhasil Update Data');
            }
        }else{
            if($file == null){
                $data = Tentang::first()->update([
                    'tentang' => $request->input('tentang'),

                ]);
                return redirect()->back()->with('sukses', 'Berhasil Update Data');
                }else{
                    $path = 'gambar_tentang';
                    $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
                    $file->move($path, $name);
                    $data = Tentang::first()->update([
                        'gambar' => $name,
                        'tentang' => $request->input('tentang'),
                        
                    ]);
                    return redirect()->back()->with('sukses', 'Berhasil Update Data');
                }
        }
    }
    public function upload_akun(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);
        $data = \App\Models\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            
        ]);
        return redirect()->back()->with('sukses', 'Berhasil Menambahkan Akun Data');
    }
}
