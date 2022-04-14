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
    
    public function show(Berita $berita)
    {
        return view('website.Single', [
            'berita' => $berita,
            "title"  => "Home"
        ]);
    }
}
