@extends('layouts.site')

@section('titulo')
Playlists
@endsection

@section('conteudo')

<div class="container">

            <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Nova Playlist</font></h1>

            <div class="col-md-6">
                <form action="{{ route('playlist.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome"><font color="white">Nome</font></label>
                        <input id="nome" class="form-control" type="text" name="nome" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="descricao"><font color="white">Descrição</font></label>
                        <input id="descricao" class="form-control" type="text" name="descricao" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="movie"><font color="white">Filme</font></label>
                        <select name="movie" id="movie" class="form-control">
                            
                            @foreach($movies as $movie)
                                <option value="{{$movie->id}}">{{$movie->titulo}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-danger">Criar</button>

                </form>
            </div>

    </div>

@endsection