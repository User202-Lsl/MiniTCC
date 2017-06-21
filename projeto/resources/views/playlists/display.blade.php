@extends('layouts.site')

@section('titulo')
{{$playlist->nome}}
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">{{$playlist->nome}}</font></h1>

      <div class="list-group col-sm-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>DESCRIÇÃO</strong></div>
          <div class="panel-body">
            <p>{{$playlist->descricao}}</p>

          </div>
        </div>
      </div>

      <div class="list-group col-sm-6">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>TOP 5 FILMES</strong></div>
          <div class="panel-body">

            <p>{{$playlist->filme1}}</p>
            <p>{{$playlist->filme2}}</p>
            <p>{{$playlist->filme3}}</p>
            <p>{{$playlist->filme4}}</p>
            <p>{{$playlist->filme5}}</p>
          
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