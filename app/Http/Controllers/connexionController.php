<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class connexionController extends Controller
{
    public function connect(){
        return view('connexion');
    }
}
