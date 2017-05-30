@extends('layouts.site')

@section('titulo')
Alterar Gênero
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <div class="col-md-6">

                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Edição de Gênero</font></h1>

                <form action="{{ route('genre.update', $genre->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="nome"><font color="white">Nome</font></label>
                        <input id="nome" class="form-control" type="text" name="nome" placeholder="{{$genre->nome}}">
                    </div>

                    <div class="form-group">
                        <label for="descricao"><font color="white">Descrição</font></label>
                        <textarea rows="5" cols="50" class="form-control" type="text" name="descricao" id="descricao" placeholder="{{$genre->descricao}}"></textarea>
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