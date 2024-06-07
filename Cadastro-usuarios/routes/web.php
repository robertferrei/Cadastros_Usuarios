<?php

use App\Http\Controllers\UsuariosControler;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[UsuariosControler::class,'index'])->name('usuarios-index');
Route::get('usuarios/create',[UsuariosControler::class,'create'])->name('usuarios-create'); 
Route::post('/usuarios',[UsuariosControler::class,'store'])->name('usuario-store');
Route::post('/usuarios/login',[UsuariosControler::class,'storeLoging'])->name('usuario-login');

//Route::get('/usuarios/{id}',[UsuariosControler::class,'show'])->where('id','[0-9]+')->name('usuario-show');



 
 