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
            <form action="{{ route('playlist.add')}}" method="post">
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

      

</div>

</br>
</br>
</br>
</br>
</br>

@endsection