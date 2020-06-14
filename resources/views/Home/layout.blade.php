<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href='css/style.css'>
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
        <form class="buscador col-md-push-4">
          <input type="search" placeholder="Buscar..">
        </form>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto sections">
            <li class="nav-item active">
              <a class="nav-link" href="#carousel">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a href="/#razones" class="nav-link">Beneficios</a>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#equipo">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#servicios">Servicios</a>
            </li>
          
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
            <a href="#!"><i class="fa fa-facebook "> Facebook</i></a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-twitter"> Twitter</i></a>
          </li>
          <li>
            <a href="#!"><i class="fa fa-youtube "> Youtube</i></a>
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
    <a href="https://mdbootstrap.com/"> ToloWebs</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


   <!------/Footer---------------->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="js/init.js"></script>
   <script src="js/One-Page/jquery.nav.js"></script>
  </body>
</html>
<script>
</script>