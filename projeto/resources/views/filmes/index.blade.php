@extends('layouts.site')

@section('titulo')
Filmes
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-6">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Filmes</font></h1>

                <p><a href="movie/create" class="btn btn-danger">Cadastrar</a></p>

                <div class="panel panel-default">
                    <div class="panel-body">

                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Ano de Lançamento</th>
                                </tr>
                            </thead>


                            <tbody>
                            @forelse ($movies as $movie)
                                <tr>
                                    <td>{{$movie->id}}</td>
                                    <td>{{$movie->titulo}}</td>
                                    <td>{{$movie->ano}}</td>
                                    <td>
                                    <a class="btn btn-primary" href="/movie/{{$movie->id}}/edit">
                                            Editar
                                        </a>

                                        <form style="display: inline;" action="{{route('movie.destroy', $movie->id)}}" method="post">
                                        
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

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

@endsection