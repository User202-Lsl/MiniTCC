@extends('layouts.site')

@section('titulo')
Gêneros
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-6">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Gêneros</font></h1>

                <p><a href="genre/create" class="btn btn-primary">Cadastrar</a></p>

                <div class="panel panel-default">
                    <div class="panel-body">

                        

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>


                            <tbody>
                            @forelse ($genres as $genre)
                                <tr>
                                    <td>{{$genre->id}}</td>
                                    <td>{{$genre->nome}}</td>
                                    <td>
                                    <a class="btn btn-warning" href="/genre/{{$genre->id}}/edit">
                                            Editar
                                        </a>
                                        

                                        @if (Auth::guest())

                                            <form style="display: inline;" action="/login" method="get">
                                            
                                                {{csrf_field()}}

                                                <input type="hidden" name="_method" value="delete">

                                                <button class="btn btn-danger">Apagar</button>
                                            </form>
                                        
                                        @else

                                            <form style="display: inline;" action="{{route('genre.destroy', $genre->id)}}" method="post">
                                        
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
</br>
</br>
</br>

@endsection