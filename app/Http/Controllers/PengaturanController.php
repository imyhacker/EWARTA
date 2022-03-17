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
        $request->validate([
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_tentang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_info' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $gambar_depan = $request->file('foto_depan');
        $gambar_tentang = $request->file('foto_tentang');
        $gambar_info = $request->file('foto_info');
        $gambar_berita = $request->file('foto_berita');
    
        if ($cek == NULL) {
            // gambar depan
            $path = 'gambar_depan';
            $name_depan = date('YmdHis').'.'.$gambar_depan->getClientOriginalExtension();
            $gambar_depan->move($path, $name_depan);
            // gambar tentang
            $path2 = 'gambar_tentang';
            $name_tentang = date('YmdHis').'.'.$gambar_tentang->getClientOriginalExtension();
            $gambar_tentang->move($path2, $name_tentang);
            // gambar info
            $path3 = 'gambar_info';
            $name_info = date('YmdHis').'.'.$gambar_info->getClientOriginalExtension();
            $gambar_info->move($path3, $name_info);
            // gambar berita
            $path4 = 'gambar_berita';
            $name_berita = date('YmdHis').'.'.$gambar_berita->getClientOriginalExtension();
            $gambar_berita->move($path4, $name_berita);
            // insert data
            $data = Aplikasi::create([
                'foto_depan' => $name_depan,
                'foto_tentang' => $name_tentang,
                'foto_info' => $name_info,
                'foto_berita' => $name_berita,
                'judul_aplikasi' => $request->input('judul_aplikasi'),
                'nama_aplikasi' => $request->input('nama_aplikasi'),
                'yel_yel' => $request->input('yel_yel'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'alamat' => $request->input('alamat'),

            ]);
            return redirect()->back()->with('sukses', 'Berhasil Update Data');
        }

        if ([$gambar_depan, $gambar_tentang, $gambar_info, $gambar_berita] == NULL) {
            // update data
            $data = Aplikasi::create([
                'judul_aplikasi' => $request->input('judul_aplikasi'),
                'nama_aplikasi' => $request->input('nama_aplikasi'),
                'yel_yel' => $request->input('yel_yel'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'alamat' => $request->input('alamat'),
            ]);
            return redirect()->back()->with('sukses', 'Berhasil Update Data');
        }
        if($cek == TRUE){
            
                $path = 'gambar_depan';
            $name_depan = date('YmdHis').'.'.$gambar_depan->getClientOriginalExtension();
            $gambar_depan->move($path, $name_depan);
            // gambar tentang
            $path2 = 'gambar_tentang';
            $name_tentang = date('YmdHis').'.'.$gambar_tentang->getClientOriginalExtension();
            $gambar_tentang->move($path2, $name_tentang);
            // gambar info
            $path3 = 'gambar_info';
            $name_info = date('YmdHis').'.'.$gambar_info->getClientOriginalExtension();
            $gambar_info->move($path3, $name_info);
            // gambar berita
            $path4 = 'gambar_berita';
            $name_berita = date('YmdHis').'.'.$gambar_berita->getClientOriginalExtension();
            $gambar_berita->move($path4, $name_berita);
            // insert data
            $data = Aplikasi::first()->update([
                'foto_depan' => $name_depan,
                'foto_tentang' => $name_tentang,
                'foto_info' => $name_info,
                'foto_berita' => $name_berita,
                'judul_aplikasi' => $request->input('judul_aplikasi'),
                'nama_aplikasi' => $request->input('nama_aplikasi'),
                'yel_yel' => $request->input('yel_yel'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'alamat' => $request->input('alamat'),

            ]);
            return redirect()->back()->with('sukses', 'Berhasil Update Data');
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
