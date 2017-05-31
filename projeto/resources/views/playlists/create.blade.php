@extends('layouts.site')

@section('titulo')
Playlists
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

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
                   
                    <button type="submit" class="btn btn-danger">Criar</button>

                </form>
            </div>

    </div>

@endif

@endsection