<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return view('Dashboard/berita', compact('tag'));
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
}
