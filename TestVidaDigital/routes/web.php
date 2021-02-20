<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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
/*
Route::get('/login', function () {
    return view('login.blade.php');
});*/

Route::get('/vidadigital', [UsuarioController::class, 'index']);
Route::get('/vidadigital/login', [UsuarioController::class, 'login']);
