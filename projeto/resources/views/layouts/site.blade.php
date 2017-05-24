<!DOCTYPE html>
<html lang="pt">

<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">
                        <img src="images/logo.png" alt="logo" width="25">
                        <span class="sr-only">(current)</span></a></li>
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
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Cadastro</a></li> 
                    </ul>
                </div>
            </div>
        </nav>                      
        </br>
        </br>
        </br>
        @yield('conteudo')
        </br>
        </br>
        </br>
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <p><font color="#FFFFFF"><center>Todos os direitos reservados</center></font></p>
        </nav>
    </div>

</body>
</html>