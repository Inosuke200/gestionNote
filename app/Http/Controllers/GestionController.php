<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionController extends Controller
{

    public function register(){
        return view('inscription-admin');
    }


    public function saveRegister(Request $request){

        DB::table('utilisateurs')->insert([
            'name'=>$request->name,
            'forname'=>$request->forname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'passwordrepeat'=>bcrypt($request->passwordrepeat),
        ]);
        return back()->with('post_register', 'Le post a été enregistré avec succès');
    }

}
