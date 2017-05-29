@extends('layouts.site')

@section('titulo')
{{$genre->nome}}
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">{{$genre->nome}}</font></h1>

    <div class="col-md-6">
        <p>{{$genre->descricao}}</p>
    <div>

    <div class="col-md-6">

    

    <div>

</div>

@endsection