<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {   
        $data = Berita::paginate(3);
        return view('website.home',
        [
            'data'=>$data,
            "title"=> "Home",
        ]);
    }

    public function berita()
    {   
        $data = Berita::All();
        return view('website.berita',
        [
            'data'=>$data,
            "title"=> "Berita",
        ]);
    }
    
    public function show($slug)
    {
        return view('website/berita/{slug}', [
            "show" => Berita::find($slug)
        ]);
    }
}
