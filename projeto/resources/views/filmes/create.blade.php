@extends('layouts.site')

@section('titulo')
Filmes
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Cadastro de Filmes</font></h1>

            <div class="col-md-6">
                <form action="{{ route('movie.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="titulo"><font color="white">Título</font></label>
                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="Ex: Homem de Ferro">
                    </div>

                    <div class="form-group">
                        <label for="ano"><font color="white">Ano de Lançamento</font></label>
                        <input id="ano" class="form-control" type="text" name="ano" placeholder="Ano">
                    </div>

                    <div class="form-group">
                        <label for="atorprincipal"><font color="white">Ator Principal</font></label>
                        <input id="atorprincipal" class="form-control" type="text" name="atorprincipal" placeholder="Ex: Brad Pitt">
                    </div>

                    <div class="form-group">
                        <label for="diretor"><font color="white">Diretor</font></label>
                        <input id="diretor" class="form-control" type="text" name="diretor" placeholder="Ex: Brad Pitt">
                    </div>

                    <div class="form-group">
                        <label for="sinopse"><font color="white">Sinopse</font></label>
                        <textarea rows="5" cols="50" class="form-control" type="text" name="sinopse" id="sinopse" placeholder=""></textarea>
                    </div>

                    <div class="form-group">
                        <label for="genre"><font color="white">Gênero</font></label>
                        <select name="genre" id="genre" class="form-control">
                            
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image"><font color="white">Imagem Representativa</font></label>
                        <input id="image" class="form-control" type="text" name="image" placeholder="www.myimage.com">
                    </div>

                    <div class="form-group">
                        <label for="video"><font color="white">Imagem Representativa</font></label>
                        <input id="video" class="form-control" type="text" name="video" placeholder="www.myvideo.com">
                    </div>
                   
                    <button type="submit" class="btn btn-danger">Cadastrar</button>

                </form>
            </div>

    </div>

@endif

@endsection