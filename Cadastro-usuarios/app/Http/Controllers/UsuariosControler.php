<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

  //configurando login de usuarios
public function storeLoging(Request $request){

    $request->validate([
        'email'=>'required|email',
        'senha'=> 'required'
    ],[
        'email.required' => 'é necessario passar um email valido',
        'senha.required' => 'é necessario digitar uma senha'
    ]);
    
    $login = Usuario::where('email',$request->input('email'))->first();
    if(!$login){
        return redirect()->route('usuarios-index')->withErrors(['error'=>"email ou senha invalida"]);
    }
    if(!password_verify($request->input('senha'),$login->login)){
        return redirect()->route('usuarios-index')->withErrors(['error'=>"email ou senha invalida"]);        
    }
    Auth::loginUsingId($login->id);
}

 
    //
}
