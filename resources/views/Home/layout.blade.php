<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href='{{asset('css/style.css')}}'>
     <link rel="icon" href="{{ URL::asset('/icono.png') }}" type="image/x-icon"/>
    <title>ToloWebs</title>
  </head>
  <body>
   <!---NAVBAR----------> 
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand mb-3 pb-3 push-bot" href="{{route('home')}}">
          <i class="material-icons mt-2 ml-2 logo d-inline-block align-top"  width="30" height="30" style="font-size:50px;">
            developer_mode
          </i>
       ToloWebs </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--
        <form class="buscador col-md-push-4">
          <input type="search" placeholder="Buscar..">
        </form>
      -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto sections">
            <li class="nav-item active ">
              <a class="nav-link" href="/#carousel">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="/#razones">Beneficios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#servicios">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#equipo">Nosotros</a>
            </li>
            
            @guest
            <li class="nav-item ml-2">
                <a class="btn btn-outline-success " href="{{ route('login') }}">Iniciar Sesion</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-outline-primary ml-2 " href="{{ route('register') }}">Registrate</a>
                </li>
            @endif
           @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="btn btn-outline-success dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->username }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
           @endguest
            <li class="nav-item">
            <a href="{{route('contacto')}}" class="ml-2 btn btn-outline-success">Contacto</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>
    <span class="ir-arriba">
       <div class="material-icons subir">
        keyboard_arrow_up
       </div>
    </span>
    <!----Social icons---->
    <div id="sidebar">
      <div class="social facebook">
        <a class="social-link" href=" https://www.facebook.com " target="_blank">
          <p class="social-p mr-2">Danos un Me Gusta!<i class="fa fa-facebook "></i> </p>
        </a>
      </div>
      <div class="social twitter">
        <a class="social-link" href=" https://www.twitter.com " target="_blank">
          <p  class="social-p mr-2">Siguenos en Twitter<i class="fa fa-twitter"></i> </p>
        </a>
      </div>
      <div class="social google">
        <a  class="social-link" href=" https://www.plus.google.com " target="_blank">
          <p  class="social-p mr-4">&nbspAgreganos en Google+<i class="fa fa-google-plus"></i> </p>
        </a>
      </div>
      <div class="social youtube">
        <a  class="social-link" href=" https://www.youtube.com " target="_blank">
          <p  class="social-p"> Subscribete en Youtube<i class="fa fa-youtube-play"></i> </p>
        </a>
      </div>
      <div class="social linkedin">
        <a class="social-link" href=" https://www.linkedin.com " target="_blank">
          <p  class="social-p">Conectate en LinkedIn<i class="fa fa-linkedin"></i> </p>
        </a>
      </div>
    </div>
    <!-----/Social icons---->
     @yield('main')
     
   <!----Footer------------------->
   
   <!-- Footer -->
<footer class="page-footer font-small blue pt-4" style="position: static" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="margin-left:230px; font-size:30px">TOLOWEBS</h5>
        <p style="font-size: 30px; margin-left:30px;">Tienes una idea? podemos hacerla realidad.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Contacto</h5>

        <ul class="list-unstyled">
          <li>
            <i class="fa fa-whatsapp fa-2x" style="color: green"> </i>
            <b style="font-size:20px ">+56964617091</b>
          </li>
          <li>
            <i class="fa fa-envelope fa-2x" style="color: red"> </i>
            <b style="font-size:18px "> estebantoloza1998@gmail.com</b>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Siguenos</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.facebook.com/esteban.toloza.5"><i class="fa fa-facebook "> Facebook</i></a>
          </li>
          <li>
            <a href="https://twitter.com/tebi_mendez"><i class="fa fa-twitter"> Twitter</i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCxPufoRKP_CRGy0pMlVFCnA"><i class="fa fa-youtube "> Youtube</i></a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://tolowebs.herokuapp.com/"> ToloWebs</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


   <!------/Footer---------------->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="{{asset('js/init.js')}}"></script>
   <script src="{{asset('js/One-Page/jquery.nav.js')}}"></script>
  </body>
</html>
<script>
</script>