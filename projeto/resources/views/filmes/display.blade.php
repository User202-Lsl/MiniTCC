@extends('layouts.site')

@section('titulo')
{{$movie->titulo}}
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">{{$movie->titulo}}</font></h1>

    <div class="list-group col-sm-8">

        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>sinopse</strong></div>
          <div class="panel-body">
            <p>{{$movie->sinopse}}</p>
            <p><strong>Estrelando:</strong>{{$movie->atorprincipal}}</p>
            <p><strong>Diretor:</strong>{{$movie->diretor}}</p>
            <p><strong>Ano De Lancamento:</strong>{{$movie->ano}}</p>
            <p><strong>Gênero:</strong>{{$movie->genre_id}}</p>
            
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