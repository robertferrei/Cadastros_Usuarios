<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class UsuariosControler extends Controller

{
public  function index(){
    $todosUsuarios = Usuario::all();  
    return view('usuarios.index',['Usuario'=>$todosUsuarios]);
}
public function create(){
    return view('usuarios.create');
}

public function store(Request  $request){
    Usuario::create($request->all());     
      return redirect()->route('usuarios-index');
  }  
 
    //
}
