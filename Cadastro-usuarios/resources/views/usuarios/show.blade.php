@extends('layouts.app')
@section('content')
<h1></h1>
<div class="container mt-10">
    <h1>login de usuarios</h1>
    <form action="{{ route('usuario-show',['id'=>$todosUsuarios->id]) }}" method="POST">     
        @csrf  
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$todosUsuarios->nome}}" placeholder="">
            </div>
        <div>

    </form>
</div>



@endsection