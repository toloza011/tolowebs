<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Plan;
use PDF;


class HomeController extends Controller
{
     
    public function Home(){
        $plan= Plan::all();
        $plan->toArray();
        return view('Home.index',compact('plan'));
    }

    public function contacto(){
        return view('Home.contacto');
    }
    public function enviarContacto(Request $request){
        
        $subject = "Contacto ToloWebs";
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
       
        return redirect()->back()->with('alerta','Mensaje enviado exitosamente!');
    }


}
