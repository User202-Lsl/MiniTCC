@extends('layouts.site')

@section('titulo')
Generos
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-6">

                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Cadastro de Gêneros</font></h1>

                <form method="post" action="{{ route('genre.store') }}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome"><font color="white">Nome</font></label>
                        <input class="form-control" type="text" name="nome" id="nome" value="" placeholder="Ex: Terror">
                    </div>

                    <div class="form-group">
                        <label for="descricao"><font color="white">Descrição</font></label>
                        <input class="form-control" type="text" name="descricao" id="descricao" value="" placeholder="Ex: Terror">
                    </div>

                    <button class="btn btn-danger" type="submit">Cadastrar</button>
                </form>

            </div>

</div>

@endsection