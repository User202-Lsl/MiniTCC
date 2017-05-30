@extends('layouts.site')

@section('titulo')
Cadastrar Gênero
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <div class="col-md-6">

                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Cadastro de Gênero</font></h1>

                <form method="post" action="{{ route('genre.store') }}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="nome"><font color="white">Nome</font></label>
                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Ex: Terror">
                    </div>

                    <div class="form-group">
                        <label for="descricao"><font color="white">Descrição</font></label>
                        <textarea rows="5" cols="50" class="form-control" type="text" name="descricao" id="descricao" placeholder="Ex: Fantasioso e tende a ficção especulativa, tem o intuito de causar medo e aterrorizar."></textarea>
                    </div>

                    <button class="btn btn-danger" type="submit">Cadastrar</button>
                </form>

            </div>

</div>

</br>
</br>
</br>
</br>

@endif

@endsection