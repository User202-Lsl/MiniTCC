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

    <div class="list-group col-md-offset-4">

        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>SINOPSE</strong></div>
          <div class="panel-body">
            <p>{{$movie->sinopse}}</p>
            <p><strong>Estrelando:</strong> {{$movie->atorprincipal}}</p>
            <p><strong>Diretor:</strong> {{$movie->diretor}}</p>
            <p><strong>Ano De Lancamento:</strong> {{$movie->ano}}</p>
            <p><strong>Gênero:</strong> {{$movie->genre->nome}}</p>
            
            <form action="" method="post">
             <div class="form-group">
                        <label for="playlist"><font color="white">Playlists</font></label>
                        <select name="playlist" id="playlist" class="form-control">
                            
                            @foreach($playlists as $playlist)
                                <option value="{{$playlist->id}}">{{$playlist->nome}}</option>
                            @endforeach
                            
                        
                        </select>
            </div>
          </form>

          </div>
        </div>
      </div>

      <div class="col-md-12">
        <iframe width="1125" height="600" src="{{$movie->video}}" frameborder="0" allowfullscreen></iframe>
      </div>

</div>

</br>
</br>
</br>

@endsection