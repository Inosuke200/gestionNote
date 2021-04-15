<?php

use App\Http\Controllers\AddprofController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route pour  la redirection sur le Dashbord du Superadmin
Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminHome'])->name('superadmin.home')->middleware('is_admin');


//Route pour ajouter les profs
Route::get('/add-prof', [App\Http\Controllers\AddprofController::class, 'addProf'] )->name('ajoutprof');
Route::post('/save', [AddprofController::class, 'saveRegister'])->name('enregistrer');
