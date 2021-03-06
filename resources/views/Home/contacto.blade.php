@extends('Home.layout')

@section('main')
  <div class="container">
      <div class="row">
          <div class="col-md-12 form">
              <div class="col-md-6 offset-3">
              <form action="{{route('correo')}}" method="post">
                  @csrf
                  <div class="card">
                    <div class="card-header bg-dark"> <h1 class="text-center text-white">Contactanos</h1></div>
                      <div class="card-body">
                        <div class="form-group">
                            @if(session()->get('alerta'))
                            <div class="alert alert-success">
                              {{ session()->get('alerta') }}  
                            </div>
                             @endif
                             @if ($errors->any())
                             <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                             @endif
                        </div>
                          <div class="form-group">
                              <label for="nombre">Nombre Completo</label>
                              <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre completo...">
                          </div>
                          <div class="form-group">
                            <label for="numero">Numero de contacto</label>
                            <input type="number" name="numero" class="form-control" placeholder="Ingrese su numero de telefono">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Email</label>
                            <input type="text" name="correo" class="form-control" placeholder="Ingrese su correo electronico...">
                        </div>
                        <div class="form-group">
                            <label for="consulta">Tu Consulta</label>
                            <textarea type="textarea" name="mensaje" class="form-control" rows=5 placeholder="Ingrese su consulta aqui..."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-dark btn-lg col-12">
                                Enviar
                             </button>
                        </div>
                        
                      </div>
                  </div>
              </form>
              </div>
          </div>
      </div>
      <div class="row">
          @if($mensaje=Session::get('mensaje'))
             <div class="alert alert-sucess">
                 {{$mensaje}}
             </div>
        @endif
      </div>
  </div>
 
@endsection