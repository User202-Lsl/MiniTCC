@extends('layouts.site')

@section('titulo')
Página Inicial
@endsection

@section('conteudo')

  <!-- TITULO -->
  <h1><font face="AR DESTINE" size="20" color="#8B0000">Ultra Filmes</font></h1>

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

  <!-- AREA DE CONTEUDO-->
  </br>
  <div clas="container">
    <div class="row">
      <div class="list-group col-sm-1">
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
      <div class="list-group col-sm-2">
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">UM SITE PRA QUEM GOSTA DE FILMES</h4>
          <p class="list-group-item-text">
            O Ultra filmes HD é um site de filmes criado para fins educacionais e é meraente experimental, portanto tem a 
            ideia de um ambiante confortavel para o usuario, aonde pode navegar e criar e experimentar experiencias
            tecnicas relevantes.
          </p>
        </a>
      </div>
      <div class="list-group col-sm-1">
      </div>
    </div>
  </div>

  <!-- FOTOS -->
  <div class="row">
  <div class="col-md-2">
    <a href="https://www.facebook.com/photo.php?fbid=581884588676798&set=a.108295152702413.1073741825.100005657862585&type=3&theater" 
       class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/15741096_581884588676798_9147637148720478217_n.jpg?oh=c068901b2bcaa9ee4a5a15972cba5de5&oe=59B44268" 
           alt="Lucas Sartorelli Leinatti">
    </a>
  </div>
  <div class="col-md-2">
    <a href="https://www.facebook.com/photo.php?fbid=539309912882109&set=a.123520374461067.37872.100004093144288&type=3&theater" 
       class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/10599725_539309912882109_3880903950351372680_n.jpg?oh=5bc52f80f38f46cdef19230356b5e9d1&oe=59B48A40" 
           alt="Wilgner Ferreira Delfino">
    </a>
  </div>
  <div class="col-md-2">
    <a href="https://www.facebook.com/photo.php?fbid=1749314895383946&set=a.1375032759478830.1073741826.100009163561713&type=3&theater" 
       class="thumbnail">
      <img src="https://scontent.fcpq2-1.fna.fbcdn.net/v/t1.0-9/16998125_1749314895383946_5879633263694949584_n.jpg?oh=63b140c30c4d5c235c77bb5ddfedd965&oe=599DB13F" 
           alt="Guilherme de Oliveira Lombardi">
    </a>
  </div>
</div>

  </br>
  

  <!-- TABELAS -->

@endsection