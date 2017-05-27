@extends('layouts.site')

@section('titulo')
Filmes
@endsection

@section('conteudo')

<div class="container">

            <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Cadastro de Filmes</font></h1>

            <div class="col-md-6">
                <form action="{{ route('filmes.store')}}" method="post">

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
                        <label for="titulo"><font color="white">Ator Principal</font></label>
                        <input id="ator" class="form-control" type="text" name="ator" placeholder="Ex: Brad Pitt">
                    </div>
                   
                    <button type="submit" class="btn btn-danger">Cadastrar</button>

                </form>
            </div>

    </div>

@endsection