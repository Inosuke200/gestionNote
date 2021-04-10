<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\connexionController;
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

// // Route::view('/tester', 'test');

// Route::view('/dashbord-super', 'dashbord-super');


Route::get('/register',  [GestionController::class, 'register'])->name('post-register');
 
Route::post('/save', [GestionController::class, 'saveRegister'])->name('enregistrer');

// Route::view('/login', 'connexion');
Route::get('/login', [connexionController::class, 'connect'])->name('post-connect');