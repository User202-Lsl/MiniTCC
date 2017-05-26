<!DOCTYPE html>
<html lang="pt">

<head>
    <title> @yield('titulo') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="logo.png" type="image/x-png"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background="http://hdimages.org/wp-content/uploads/2016/12/black-background-image-HD9.jpg">

    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <img src="https://pbs.twimg.com/profile_images/738503147400892416/tZM4_3Hq.jpg" alt="logo" width="50">
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Filmes</a></li>
                        <li><a href="#">Genêros</a></li>
                        <li><a href="#">Playlists</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-danger">Procurar</button>
                        </form>
                        @if (Auth::guest())
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register">Cadastro</a></li> 
                        @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>  
        
        @yield('conteudo')

        </br>
        <nav class="navbar navbar-inverse">
            <p><font color="#FFFFFF"><center>Todos os direitos reservados</center></font></p>
        </nav>
    </div>

</body>
</html>