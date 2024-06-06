@extends('layouts.app')

@section('content')

<!-- conteudo para renderizar no templete -->
<div class="container mt-10">
    <table class="table table-striped">
        <h1>Crie um usuario</h1>
      
    
        <div class="col-sm-2">
            <a href="{{route('usuarios-create')}} " class="btn btn-success">Novo cadastro</a>
        </div>

            <tbody>
                @foreach($todosUsuarios as $usuarios)
                <tr>
                    <th>{{$usuarios->id}}</th>
                </tr>
                @endforeach 




            </tbody>
        </div>
    </table>

</div>

@endsection