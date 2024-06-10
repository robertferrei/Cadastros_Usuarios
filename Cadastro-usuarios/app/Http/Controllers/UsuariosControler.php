<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosControler extends Controller

{
    public  function index()
    {
        $todosUsuarios = Usuario::all();
        return view('usuarios.index', ['Usuario' => $todosUsuarios]);
    }
    // criando retorno de view create
    public function create()
    {
        return view('usuarios.create');
    }
    //criando novo usuarios
    public function store(Request  $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuarios-index');
    }

    //configurando login de usuarios
    public function storeLoging(Request $request)
    {
        //verificando email ou senha em brancos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ], [
            'email.required' => 'é necessario passar um email valido',
            'senha.required' => 'é necessario digitar uma senha'
        ]);
        $todosUsuarios = Usuario::all();
        if (!Usuario::where('email', $request->input('email'))->first()) {
            //dd("nao trouxe");
            return redirect()->route('usuarios-index')->withErrors(['error' => "email ou senha invalida"]);
        }
        if (!Usuario::where('senha', $request->input('senha'))) {
            return redirect()->route('usuarios-index')->withErrors(['error' => "email ou senha invalida"]);
        }
        dd("logado");
    }
}
