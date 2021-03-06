@extends('layouts.site')

@section('titulo')
Playlists
@endsection

@section('conteudo')

<div class="container">

            <div class="col-md-6">
            
                <h1 class="page-header"><font face="AR DESTINE" size="20" color="white">Playlists</font></h1>

                <p><a href="playlist/create" class="btn btn-primary">Nova Playlist</a></p>

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
                            @forelse ($playlists as $playlist)
                                <tr>
                                    <td>{{$playlist->id}}</td>
                                    <td>{{$playlist->nome}}</td>
                                    <td>
                                    <a class="btn btn-success" href="/playlist/{{$playlist->id}}/display">
                                            Exibir
                                        </a>

                                    <a class="btn btn-warning" href="/playlist/{{$playlist->id}}/edit">
                                            Editar
                                        </a>


                                        @if (Auth::guest())

                                            <form style="display: inline;" action="/login" method="get">
                                            
                                                {{csrf_field()}}

                                                <input type="hidden" name="_method" value="delete">

                                                <button class="btn btn-danger">Apagar</button>
                                            </form>
                                        
                                        @else

                                            <form style="display: inline;" action="{{route('playlist.destroy', $playlist->id)}}" method="post">
                                        
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