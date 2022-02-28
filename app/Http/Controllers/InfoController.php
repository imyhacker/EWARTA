<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return view('Dashboard.info.index');
    }
    public function upload_info()
    {
        # code...
    }
}
