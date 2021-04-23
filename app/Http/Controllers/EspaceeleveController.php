<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspaceeleveController extends Controller
{
    public function espacePupil(Request $request){
        return view('espace-eleve');
    }
}
