@extends('Home.layout')

@section('main')

 <!---CAROUSEL------------>
 <section class="mt-5 container-fluid" style="height:50%;" id="carousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://image.freepik.com/vector-gratis/ilustracion-concepto-tiempo-trabajo_114360-1074.jpg" style="margin-left:130px;" class="d-block w-90 h-100 firts" alt="...">
          <div  style="color: black;" class="carousel-caption firth">
            <h5>Dejalo en nuestras manos</h5>
            <p>Daremos lo mejor por darte un producto de calidad.</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="img/ganancias.jpg"  class="d-block w-90 h-100" alt="...">
          <div style="color: black; position:right;" class="carousel-caption second inline d-none d-md-block">
            <h5>Mejora tu negocio</h5>
            <p>Un sitio web aumenta tus ganancias y atraera mas clientes</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/grupo.png" style="margin-left: 200px;" class="d-block w-93 h-100" alt="...">
          <div style="color: black;" class="carousel-caption d-none d-md-block third">
            <h5>Tenemos experiencia</h5>
            <p>Nuestro equipo esta conformado solo por profesionales</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
    <!---/CAROUSEL------------>
  <hr>
  <!-----Razones---->
  <section id="razones">
     <div class="container-fluid ">
            <h1 class="text-center">
               Razones para escogernos
            </h1>
            <div class="row cont-razones">
              <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="container">
                   <div class="cont-razon ">
                     <div class="icon-razon">
                        <i class="material-icons icono">
                          flight
                        </i>
                     </div>
                     <div class="title-razon">
                      <p><b>Somos Internacionales</b></p>
                    </div>
                    <div class="description-razon">
                      <p>Trabajamos en proyectos para todo el mundo.</p>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="container">
                   <div class="cont-razon ">
                     <div class="icon-razon">
                        <i class="material-icons icono">
                          developer_mode
                        </i>
                     </div>
                     <div class="title-razon">
                      <p><b>Diseños responsivos</b></p>
                    </div>
                    <div class="description-razon">
                      <p>Nos adaptamos a cualquier tipo de dispositivo.</p>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="container">
                   <div class="cont-razon ">
                     <div class="icon-razon">
                        <i class="material-icons icono">
                          phone_in_talk
                        </i>
                     </div>
                     <div class="title-razon">
                      <p><b>Te resolvemos tus dudas</b></p>
                    </div>
                    <div class="description-razon">
                      <p>Entregamos accesorias 24/7</p>
                    </div>
                   </div>
                </div>
              </div>
            </div>
            <div class="row cont-razones2">
              <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="container">
                   <div class="cont-razon ">
                     <div class="icon-razon">
                        <i class="material-icons icono">
                          flight
                        </i>
                     </div>
                     <div class="title-razon">
                      <p><b>Somos Internacionales</b></p>
                    </div>
                    <div class="description-razon">
                      <p>Trabajamos en proyectos para todo el mundo.</p>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="container">
                   <div class="cont-razon ">
                     <div class="icon-razon">
                        <i class="material-icons icono">
                          flight
                        </i>
                     </div>
                     <div class="title-razon">
                      <p><b>Somos Internacionales</b></p>
                    </div>
                    <div class="description-razon">
                      <p>Trabajamos en proyectos para todo el mundo.</p>
                    </div>
                   </div>
                </div>
              </div>
            </div>
         </div>
  </section>
  <hr>
  <!--------/Razones---------->
   <!-----Servicios---->
   
   <section id="servicios">
    <div class="container">
        <h1 class="text-center" style="margin-top:60px; margin-bottom:30px">
          Nuestros Servicios
        </h1>
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header bg-secondary">
            <h4 class="my-0 font-weight-normal text-white ">Plan Basico</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$49.990 <small class="text-muted">/ Mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Pagina Web Simple</li>
              <li>Hosting y dominio .CL</li>
              <li>Correo de Administracion</li>
              <li>Seccion de contacto</li>
              <li><del>Login y registro de usuarios</del> </li>
              <li><del>Accesorias 24/7</del> </li>
            </ul>
          <a type="submit" href="{{route('plan',1)}}" class="btn btn-lg btn-block btn-outline-primary">Lo quiero!</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header bg-warning">
            <h4 class="my-0 font-weight-normal ">Plan Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$79.990 <small class="text-muted">/ Mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Pagina Web profesional</li>
              <li>Hosting y dominio .CL</li>
              <li>Correo de Administracion</li>
              <li>Seccion de contacto</li>
              <li>Login y registro de usuarios</li>
              <li>Accesorias 24/7</li>
            </ul>
            <a type="submit" href="{{route('plan',2)}}" class="btn btn-lg btn-block btn-outline-warning text-dark">Lo quiero!</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header bg-danger">
            <h4 class="my-0 font-weight-normal text-white" >Plan Tienda Online</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$99.990 <small class="text-muted">/ Mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Tienda Online completa</li>
              <li>Hosting y dominio .CL</li>
              <li>Correo de Administracion</li>
              <li>Seccion de contacto</li>
              <li>Login y registro de usuarios</li>
              <li>Accesorias 24/7</li>

            </ul>
            <a type="submit" href="{{route('plan',3)}}" class="btn btn-lg btn-block btn-outline-danger">Lo quiero!</a>
          </div>
        </div>
      </div>
    </form>
   </section>
  <hr>
 <!--------/Servicios---------->
  <!--------Equipo------------->
   <section id="equipo">
     <div class="container">
      <h1 class="text-center" style="margin-top: 60px">
         Nuestro Equipo
     </h1>
     <br>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="img/perfil-hombre.jpg" class="card-img-top border-bottom" alt="">
              <div class="card-body">
                 <div class="card-title text-center">
                   <h4><b>Esteban Toloza</b></h4>
                  </div>
                  <div class="card-text text-center">
                     Ingeniero Informatico
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/perfil-hombre.jpg" class="card-img-top border-bottom" alt="">
              <div class="card-body">
                 <div class="card-title text-center">
                   <h4><b>Esteban Toloza</b></h4>
                  </div>
                  <div class="card-text text-center">
                     Ingeniero Informatico
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/perfil-hombre.jpg" class="card-img-top border-bottom" alt="">
              <div class="card-body">
                 <div class="card-title text-center">
                   <h4><b>Esteban Toloza</b></h4>
                  </div>
                  <div class="card-text text-center">
                     Ingeniero Informatico
                  </div>
              </div>
            </div>
          </div>     
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 offset-2">
              <div class="card">
                <img src="img/perfil-hombre.jpg" class="card-img-top border-bottom" alt="">
                <div class="card-body">
                   <div class="card-title text-center">
                     <h4><b>Esteban Toloza</b></h4>
                    </div>
                    <div class="card-text text-center">
                       Ingeniero Informatico
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/perfil-hombre.jpg" class="card-img-top border-bottom" alt="">
              <div class="card-body">
                 <div class="card-title text-center">
                   <h4><b>Esteban Toloza</b></h4>
                  </div>
                  <div class="card-text text-center">
                     Ingeniero Informatico
                  </div>
              </div>
            </div>
          </div>
        </div>
     </div>

   </section>
   <hr>
  <!--------/Equipo------------->
  


@endsection