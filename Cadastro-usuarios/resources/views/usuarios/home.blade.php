@extends('layouts.app')

@section('content')
 
<a href="{{route('home')}}"> home</a>

<h2>login</h2>
<form action="{{route('usuario-show')}}" method="POST">
    @csrf
    <input type="text" name="email" value="robertferreiramaia20@ma">
    <input type="password" name="senha" value="111">
    <button type="submit">Login</button>
</form>
@endsection