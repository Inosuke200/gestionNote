<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddprofController extends Controller
{
    public function addProf(Request $request){
        return view('inner-page');
    }


    public function register(){
        return view('inner-page');
    }


    public function saveRegister(Request $request){

        DB::table('users')->insert([
            'name'=>$request->name,
            'forname'=>$request->forname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'passwordrepeat'=>bcrypt($request->passwordrepeat),
        ]);
        return back()->with('post_register', 'Le post a été enregistré avec succès');
    }
}
