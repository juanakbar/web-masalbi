<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index()
    {   
        return view('website.sejarah',
        [
            "title" => "Profile",
        ]);
    }
}
