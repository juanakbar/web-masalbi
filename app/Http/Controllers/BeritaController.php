<?php

namespace App\Http\Controllers;


use App\Models\Berita;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {   

        $beritas = Berita::paginate(3);
        return view ('website.home',[
            "title" => "Home"
        ], compact('beritas'));
        
    }

    public function prestasi()
    {   
        $prestasis = Prestasi::paginate(3);
        return view ('website.home',[
            "title" => "Home"
        ], compact('prestasis'));
    }

    // public function berita()
    // {   
    //     return view('website.berita',
    //     [
    //         'beritas'=>Berita::all(),
    //         "title"=> "Home",
    //     ]);
    // }
    
    // public function show(Berita $berita)
    // {
    //     return view('website.Single', [
    //         'berita' => $berita,
    //         "title"  => "Home"
    //     ]);
    // }
}
