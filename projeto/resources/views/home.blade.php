@extends('layouts.site')

@section('titulo')
Página Inicial
@endsection

@section('conteudo')

<div class="container">
  <!-- TITULO -->
  <h1><font face="AR DESTINE" size="20" color="white">Página Inicial</font></h1>

  <!-- CAROUSEL -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="http://www.dccomics.com/sites/default/files/Gallery_327632K4a_SS_Dom_Character_Harley_57a3c96be06cb4.90062679.jpg" alt="Arlequina" width="1500" height="1000">
      </div>

      <div class="item">
        <img src="https://s-media-cache-ak0.pinimg.com/originals/c4/c5/fa/c4c5fa2a37178f2576c9a0e78aa56c81.jpg" alt="Power Rangers 2017" width="1500" height="1000">
      </div>

      <div class="item">
        <img src="https://4.bp.blogspot.com/-4Uj-dbqnKTs/U6VxMnhz5lI/AAAAAAAA_OY/9WeYE4S8GiQ/s0/Guardians+of+the+Galaxy-HD.jpg" alt="Guardiões da Galaxia 2" width="1500" height="1000">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

  <!-- AREA DE CONTEUDO-->
<div class="container">
  <!-- subtitulo -->
  </br>
  <h2><font face="AR DESTINE" size="20" color="white">Mais Informações</font></h2>
      <div class="list-group col-sm-4">
        <a href="#" class="list-group-item">
          <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
          </table>
        </a>
      </div>
      <div class="list-group col-sm-4">
        <a href="#" class="list-group-item">
          <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
              </tr>
              <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
              </tr>
              <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
              </tr>
            </tbody>
          </table>
        </a>
      </div>
      <div class="list-group col-sm-4">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Mais sobre...</div>
          <div class="panel-body">
            <p>O Ultra filmes HD é um site de filmes criado para fins educacionais e é meraente experimental, portanto tem a 
            ideia de um ambiante confortavel para o usuario, aonde pode navegar e criar e experimentar experiencias
            tecnicas relevantes.</p>
          </div>
        </div>
      </div>
</div>

  <!-- FOTOS -->
<div class="container">
  <!-- subtitulo -->
  </br>
  <h2><font face="AR DESTINE" size="20" color="white">Desenvolvedores</font></h2>

  <div class="col-md-4">
    <div class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/16998125_1749314895383946_5879633263694949584_n.jpg?oh=63b140c30c4d5c235c77bb5ddfedd965&oe=599DB13F" 
           alt="Guilherme de Oliveira Lombardi"
           width="240" height="100">
      <div class="caption">
        <h3><center>Guilherme Lombardi</center></h3>
        <p>
          <a href="https://www.facebook.com/guilherme.lombardi.75" target="parent"><img src="images/face-logo.png" alt="face.guilherme" width="40" height="8"/></a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/15741096_581884588676798_9147637148720478217_n.jpg?oh=c068901b2bcaa9ee4a5a15972cba5de5&oe=59B44268" 
           alt="Lucas Sartorelli Leinatti"
           width="240" height="100">
      <div class="caption">
        <h3><center>Lucas Sartorelli Leinatti</center></h3>
        <p><a href="https://www.facebook.com/lucas.sartorelli.71" target="parent"><img src="images/face-logo.png" alt="face.sasa" width="40" height="8"/></a></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/15826175_1234343626660474_3579004085768471629_n.jpg?oh=6ec79dee51db28e52214e9ba3f01ecab&oe=59A99F66" 
           alt="Wilgner Ferreira Delfino"
           width="135" height="100">
      <div class="caption">
        <h3><center>Wilgner Ferreira Delfino</center></h3>
        <p><a href="https://www.facebook.com/wilgner.delfino" target="parent"><img src="images/face-logo.png" alt="face.wilgner" width="40" height="8"/></a></p>
      </div>
    </div>
  </div>

</div>

  
  
@endsection