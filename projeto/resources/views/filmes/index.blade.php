@extends('layouts.site')

@section('titulo')
Filmes
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-7">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Filmes</font></h1>

                <p><a href="movie/create" class="btn btn-primary">Cadastrar</a></p>

                <div class="panel panel-default">
                    <div class="panel-body">

                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Gênero</th>
                                </tr>
                            </thead>


                            <tbody>
                            @forelse ($movies as $movie)
                                <tr>
                                    <td>{{$movie->titulo}}</td>
                                    <td>{{$movie->genre->nome}}</td>
                                    <td>

                                    <a class="btn btn-success" href="/movie/{{$movie->id}}/display">
                                            Exibir
                                        </a>

                                    <a class="btn btn-warning" href="/movie/{{$movie->id}}/edit">
                                            Editar
                                        </a>

                                        


                                        @if (Auth::guest())

                                            <form style="display: inline;" action="/login" method="get">
                                            
                                                {{csrf_field()}}

                                                <input type="hidden" name="_method" value="delete">

                                                <button class="btn btn-warning">Apagar</button>
                                            </form>
                                        
                                        @else

                                            <form style="display: inline;" action="{{route('movie.destroy', $movie->id)}}" method="post">
                                        
                                                {{csrf_field()}}

                                                <input type="hidden" name="_method" value="delete">

                                                <button class="btn btn-danger">Apagar</button>
                                            </form>

                                        @endif


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

@endsection