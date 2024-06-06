@extends('layouts.app')

@section('content')

<!-- conteudo para renderizar no templete -->
<div class="container mt-10">
    <h1>Crie um usuario</h1>
    <hr>
    <form action="{{route('usuario-store')}}" method="POST">
        
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome usuario: </label>
                <input type="text" class="form-control" name="nome" placeholder="digite seu nome">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email usuario: </label>
                <input type="text" class="form-control" name="email" placeholder="digite um email valido">
            </div>
            <br>
            <div class="form-group">
                <label for="senha">Senha :</label>
                <input type="number" class="form-control" name="senha" placeholder="crie sua senha">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-danger">
            </div>


        </div>
    </form>
</div>

@endsection