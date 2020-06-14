<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class HomeController extends Controller
{
     
    public function Home(){

        return view('Home.index');
    }

    public function contacto(){
        return view('Home.contacto');
    }
    public function enviarContacto(Request $request){
        $subject = "Contacto ToloWebs";
        $for ="estebantoloza1998@gmail.com";
        $nombre= $request->name;
        $from="felipe@gmail.com";
        Mail::send('Contacto.email',$request->all(), function($msj) use($subject,$for,$from,$nombre,$request){
            $msj->from($from);
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back()->with('alerta','Mensaje enviado exitosamente!');
    }


}
