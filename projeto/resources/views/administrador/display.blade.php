@extends('layouts.site')

@section('titulo')
Mensagem
@endsection

@section('conteudo')

<div class="container">

    <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Mensagem</font></h1>

      <div class="list-group col-sm-8">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading"><strong>{{$contact->assunto}}</strong></div>
          <div class="panel-body">
            <p>{{$contact->mensagem}}</p>

          </div>
        </div>
      </div>
          
          </div>
        </div>
      </div>

</div>

</br>
</br>
</br>
</br>
</br>

@endsection