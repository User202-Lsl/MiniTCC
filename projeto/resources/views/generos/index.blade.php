@extends('layouts.site')

@section('titulo')
Generos
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-4">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Cadastro de Gêneros</font>
                    <a href="/generos/create" class="btn btn-danger">Cadastrar</a>
                </h1>

                <div class="panel panel-default">
                    <div class="panel-heading">Dados da tabela</div>
                    <div class="panel-body">

                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>


                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                    <td>
                                    <a class="btn btn-primary" href="/generos/{{$genero->id}}/edit">
                                            Editar
                                        </a>

                                        <form style="display: inline;" action="{{route('genre.destroy', $genero->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn btn-danger">Apagar</button>

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