@extends('layouts.site')

@section('titulo')
{{$playlist->nome}}
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">{{$playlist->nome}}</font></h1>

    <div class="list-group col-sm-4">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Descrição</div>
          <div class="panel-body">
            <p>{{$playlist->descricao}}</p>
          </div>
        </div>
      </div>

</div>

</br>
</br>
</br>
</br>
</br>

@endsection