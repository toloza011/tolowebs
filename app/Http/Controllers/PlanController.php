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
        $for =["estebantoloza1998@gmail.com","contactotolowebs@gmail.com"];
        $nombre= $request->nombre;
        $from=$request->correo;
   
        Mail::send('Contacto.email',$request->all(), function($msj) use($subject,$for,$from,$nombre,$request){
            $pdf= \PDF::loadView('Contacto.prueba',compact('request'));
            $pdf->download('prueba.pdf',array('Attachment'=>0));
            $msj->from($from);
            $msj->subject($subject);
            $msj->to($for);
            $msj->attachData($pdf->output(), "Contacto.pdf");
        
        });
        return redirect()->back()->with('alerta','Datos enviados Correctamente! Nos pondremos en contacto con usted a la brevedad.');
    }
}
