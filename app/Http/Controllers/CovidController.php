<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function charts(){

    $provinsi=  Http::get('https://api.kawalcorona.com/indonesia/provinsi');
    
    $data = $provinsi->json();

   // dd($data);
        return view ('corona', compact('data'));

    }
}
