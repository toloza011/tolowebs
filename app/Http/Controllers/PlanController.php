<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Mail;
use PDF;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function inscripcion($id){
        
        $plan= Plan::findOrFail($id);
       
        return view('Home.Plan',compact('plan'));    
    }
    public function contratar($plan,Request $request){
        $mensajes = [
            'nombre.required' => 'El nombre es obligatorio',
            'numero.required' => 'El numero es obligatorio',
            'correo.required' => 'El Email es obligatorio',
            'mensaje.required' => 'El mensaje es obligatorio',
            'correo.email'=>     'Debes ingresar un email valido'
        ];

        Validator::make($request->all(), [
            'nombre' => 'required',
            'numero' => 'required|numeric',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ],$mensajes)->validate();

        $servicio= Plan::findOrFail($plan);
        $subject = "Contratacion Servicio Tolo webs: $servicio->nombre ";
        $for ="estebantoloza1998@gmail.com";
        $nombre= $request->nombre;
        $from=$request->correo;
   
        Mail::send('Contacto.email',$request->all(), function($msj) use($subject,$for,$from,$nombre,$request){
           $msj->from('estebantoloza98@gmail.com','Equipo de ToloWebs');
           $msj->subject($subject);
           $msj->to($for);
        });
        return redirect()->back()->with('alerta','Datos enviados Correctamente! Nos pondremos en contacto con usted a la brevedad.');
    }
}
