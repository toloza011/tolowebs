<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Mail;
use PDF;
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
