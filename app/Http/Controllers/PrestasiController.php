<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {   
        $prestasis = Prestasi::paginate(3);
        return view ('website.home',[
            "title" => "Home"
        ], compact('prestasis'));
    }

    // public function berita()
    // {   
    //     $data = Berita::All();
    //     return view('website.berita',
    //     [
    //         'data'=>$data,
    //         "title"=> "Berita",
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
