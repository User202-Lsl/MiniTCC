@extends('layouts.site')

@section('titulo')
Alterar Filme
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <div class="col-md-6">

                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Edição de Filme</font></h1>

                <form action="{{ route('movie.update', $movie->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="titulo"><font color="white">Título</font></label>
                        <input id="titulo" class="form-control" type="text" name="titulo" placeholder="{{$movie->titulo}}">
                    </div>

                    <div class="form-group">
                        <label for="ano"><font color="white">Ano de Lançamento</font></label>
                        <input id="ano" class="form-control" type="text" name="ano" placeholder="{{$movie->ano}}">
                    </div>

                    <div class="form-group">
                        <label for="atorprincipal"><font color="white">Ator Principal</font></label>
                        <input id="atorprincipal" class="form-control" type="text" name="atorprincipal" placeholder="{{$movie->atorprincipal}}">
                    </div>

                    <div class="form-group">
                        <label for="diretor"><font color="white">Diretor</font></label>
                        <input id="diretor" class="form-control" type="text" name="diretor" placeholder="{{$movie->diretor}}">
                    </div>

                    <div class="form-group">
                        <label for="sinopse"><font color="white">Sinopse</font></label>
                        <textarea rows="5" cols="50" class="form-control" type="text" name="sinopse" id="sinopse" placeholder="{{$movie->sinopse}}"></textarea>
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