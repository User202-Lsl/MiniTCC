@extends('layouts.site')

@section('titulo')
Editar Playlist
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <div class="col-md-6">

                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Edição de Playlist</font></h1>

                <form action="{{ route('playlist.update', $playlist->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="nome"><font color="white">Nome</font></label>
                        <input id="nome" class="form-control" type="text" name="nome" value="{{$playlist->nome}}">
                    </div>

                    <div class="form-group">
                        <label for="descricao"><font color="white">Descrição</font></label>
                        <input id="descricao" class="form-control" type="text" name="descricao" value="{{$playlist->descricao}}">
                    </div>

                    <div class="form-group">
                        <label for="movie1"><font color="white">Filme 1</font></label>
                        <select name="movie1" id="movie1" class="form-control">
                            
                            @foreach($movies as $movie)
                                <option value="{{$movie->titulo}}">{{$movie->titulo}}</option>
                                
                            @endforeach
                            
                        
                        </select>
                    </div>    

                    <div class="form-group">
                        <label for="movie2"><font color="white">Filme 2</font></label>
                        <select name="movie2" id="movie2" class="form-control">
                            
                                @foreach($movies as $movie)
                                    <option value="{{$movie->titulo}}">{{$movie->titulo}}</option>
                                @endforeach
                        
                        </select>
                    </div>   

                    <div class="form-group">
                        <label for="movie3"><font color="white">Filme 3</font></label>
                        <select name="movie3" id="movie3" class="form-control">
                            
                            @foreach($movies as $movie)
                                <option value="{{$movie->titulo}}">{{$movie->titulo}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>   

                    <div class="form-group">
                        <label for="movie4"><font color="white">Filme 4</font></label>
                        <select name="movie4" id="movie4" class="form-control">
                            
                            @foreach($movies as $movie)
                                <option value="{{$movie->titulo}}">{{$movie->titulo}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>   

                    <div class="form-group">
                        <label for="movie5"><font color="white">Filme 5</font></label>
                        <select name="movie5" id="movie5" class="form-control">
                            
                            @foreach($movies as $movie)
                                <option value="{{$movie->titulo}}">{{$movie->titulo}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>   
                   
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </form>
            </div>
</div>

</br>
</br>
</br>
</br>

@endif

@endsection