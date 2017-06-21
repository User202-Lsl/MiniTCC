@extends('layouts.site')

@section('titulo')
{{$movie->titulo}}
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">{{$movie->titulo}}</font></h1>

    <div class="col-md-4">

        <img class="thumbnail" src="{{$movie->image}}" alt="{{$movie->titulo}}" width="300" height="400"/>
    </div>

    <div class="list-group col-md-8">

        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>INFORMAÇÕES</strong></div>
          <div class="panel-body">
            <p><strong>Sinopse:</strong> {{$movie->sinopse}}</p>
            <p><strong>Estrelando:</strong> {{$movie->atorprincipal}}</p>
            <p><strong>Diretor:</strong> {{$movie->diretor}}</p>
            <p><strong>Ano De Lancamento:</strong> {{$movie->ano}}</p>
            <p><strong>Gênero:</strong> {{$movie->genre->nome}}</p>
            <p><strong>Nota:</strong> {{$movie->nota}}</p>

            <a class="btn btn-warning" href="/movie/{{$movie->id}}/nota1">
              <span class="glyphicon glyphicon-star"></span>                               
            </a>

            <a class="btn btn-warning" href="/movie/{{$movie->id}}/nota2">
              <span class="glyphicon glyphicon-star"></span>                               
            </a>

            <a class="btn btn-warning" href="/movie/{{$movie->id}}/nota3">
              <span class="glyphicon glyphicon-star"></span>                               
            </a>

            <a class="btn btn-warning" href="/movie/{{$movie->id}}/nota4">
              <span class="glyphicon glyphicon-star"></span>                               
            </a>

            <a class="btn btn-warning" href="/movie/{{$movie->id}}/nota5">
              <span class="glyphicon glyphicon-star"></span>                               
            </a>
            
            
          </div>
        </div>
      </div>
      
      <div class="col-md-12">
        {{$rest = substr("$movie->video",32)}}
        <iframe width="1111" height="630" src="https://www.youtube.com/embed/{{$rest}}" frameborder="0" allowfullscreen></iframe>
      </div>

</div>

</br>
</br>
</br>

@endsection