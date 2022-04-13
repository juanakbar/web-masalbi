<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {   
        $data = Berita::all();
        return view('website.home',
        [
            'data'=>$data,
            "title"=> "Home"
        ]);
    }
}
