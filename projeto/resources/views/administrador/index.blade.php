@extends('layouts.site')

@section('titulo')
Mensagens
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-5">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Mensagens</font></h1>

                <div class="panel panel-default">
                    <div class="panel-body">

                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Assunto</th>
                                </tr>
                            </thead>


                            <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{$contact->assunto}}</td>
                                    <td>

                                    <a class="btn btn-success" href="/contact/{{$contact->id}}/display">
                                            Exibir
                                        </a>

                                            <form style="display: inline;" action="{{route('contact.destroy', $contact->id)}}" method="post">
                                        
                                                {{csrf_field()}}

                                                <input type="hidden" name="_method" value="delete">

                                                <button class="btn btn-warning">Apagar</button>
                                            </form>

                                    </td>
                                </tr>
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse
                                
                                
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

</div>

@endsection