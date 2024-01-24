<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AziendeFerroviarie;

class Pagecontroller extends Controller
{
    public function index(){
        $aziendeFerroviarie = AziendeFerroviarie::all();


        return view('home', ['aziendeFerroviarie' => $aziendeFerroviarie]);
    }

    
}
