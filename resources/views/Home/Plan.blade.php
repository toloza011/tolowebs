@extends('Home.layout')


@section('main')
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div class="container">
    <div class="row">
        <div class="col-md-12 form">
            <div class="col-md-6 offset-3">
            <form action="{{route('contratar',$plan->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header bg-dark">
                    <h1 class="text-center text-white">{{$plan->nombre}}</h1>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                          @if(session()->get('alerta'))
                          <div class="alert alert-success">
                            {{ session()->get('alerta') }}  
                          </div>
                           @endif
                      </div>
                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" value="{{Auth::user()->name}}"  readonly="readonly">
                        </div>
                        <div class="form-group">
                          <label for="numero">Numero de contacto</label>
                          <input type="number" name="numero" class="form-control" placeholder="Ingrese su numero de telefono">
                      </div>
                      <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="correo" class="form-control" value="{{Auth::user()->email}}" readonly="readonly">
                      </div>
                      <div class="form-group">
                          <label for="mensaje">Escribe aqui tu mensaje</label>
                           <textarea class="form-control" name="mensaje" id="" cols="30" rows="10">{{$plan->nombre}} | ${{$plan->precio}}
Quiero una pagina que tenga....
                           </textarea>
                      </div>
                      <div class="form-group">
                          <button class="btn btn-outline-dark btn-lg col-12 " type="submit">Enviar</button>
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