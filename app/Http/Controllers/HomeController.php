<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Berita;
use App\Models\Prestasi;


class HomeController extends Controller
{
    public function index()
    {   
        return view('website.home',
        [
            'beritas'=>Berita::paginate(3),
            "title"=> "Home",
        ]);
    }

    public function prestasi()
    {   
        return view('website.home',
        [
            'prestasis'=>Prestasi::all(),
            "title"=> "Home",
        ]);
    }
    
    // public function show(Berita $berita)
    // {
    //     return view('website.Single', [
    //         'berita' => $berita,
    //         "title"  => "Home"
    //     ]);
    // }
}
