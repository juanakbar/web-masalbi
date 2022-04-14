<?php

namespace App\Http\Controllers;


use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {   
        return view('website.home',
        [
            'beritas'=>Berita::paginate(3),
            "title"=> "Home",
        ]);
    }

    public function berita()
    {   
        return view('website.berita',
        [
            'beritas'=>Berita::all(),
            "title"=> "Home",
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
