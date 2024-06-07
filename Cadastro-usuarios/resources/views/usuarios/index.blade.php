@extends('layouts.app')

@section('content')

<!-- conteudo para renderizar no templete -->

<div class="row">
    <div class="col-sm-10">
 
    </div>
    <div class="col-sm-2">
        <a href="{{route('usuarios-create')}} " class="btn btn-success">Novo cadastro</a>
    </div>
</div>

<h2>login</h2>
@if (session()->has('success'))
{{ session()->get('success') }} 
@endif

@if(auth()->check())
    logado com sucesso {{auth()->login()->nome}}
@else
<form action="{{route('usuario-login')}}" method="POST">
    @csrf
    <input type="text" name="email" value="robertferreiramaia20@ma">
    @error('email')
    <span>{{$message}}</span>
    @enderror
           
    <input type="password" name="senha" value="111">
    @error('senha')
    <span>{{$message}}</span>
    @enderror
    <button type="submit">Login</button>
</form>
@endif
@endsection