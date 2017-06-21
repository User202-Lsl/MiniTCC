@extends('layouts.site')

@section('assunto')
Contato
@endsection

@section('conteudo')

@if (Auth::guest())
    <script language= "JavaScript">
        location.href="/login"
    </script>
@else

<div class="container">

            <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Contato</font></h1>

            <div class="col-md-6">
                <form action="{{ route('contact.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="assunto"><font color="white">Assunto</font></label>
                        <input id="assunto" class="form-control" type="text" name="assunto" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="mensagem"><font color="white">Mensagem</font></label>
                        <textarea rows="5" cols="50" class="form-control" type="text" name="mensagem" id="mensagem" placeholder=""></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger">Enviar</button>

                </form>  
            </div>
</div>

</br>
</br>
</br>
</br>
</br>

@endif

@endsection