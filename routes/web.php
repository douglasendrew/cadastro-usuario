<?php

use App\Http\Controllers\Usuario;
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

Route::get('/', [Usuario::class, 'cadastrar'])->name('home');

Route::post('/salvar', [Usuario::class, 'salvar'])->name('cadastro');

// Route::post('/consulta/{id}', [Usuario::class, 'salvar']);
// Route::match (['get', 'post'], '/', [Usuario::class, 'cadastrar']);