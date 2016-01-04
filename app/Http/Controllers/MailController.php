<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesCommands;
use App\Console\Commands\enviarprealerta;
use App\Console\Commands\previsaodechegada;
use DB;
use App\agente;
use App\User;


class MailController extends Controller
{
  
use DispatchesCommands; 


    public function index()
    {
        return view('mail.contato');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    public static function store(Request $request)
       {        
           
        }   
    


    public function show($id)
    {
        //
    }


    public function edit(Request $request)

    {
            $to=$request->input('email');
            $sub=$request->input('subject');
            $mes=$request->input('body');

            return  [$to, $sub, $mes];

            return view('mail.contato');
    }

   
    public function update()
    {
      
    }

    public function destroy($id)
    {
        //
    }

     public static function previsaodechegada()
    {
          

              $clientesagente = DB::table('agentes')->orderBy('nome')->get();



                 foreach ($clientesagente as $key) {
                 
                 $prevchegada = DB::table("vw_mbl")->where('atracado', '=', '00/00/0000')
                 ->where('cnee', '=',  $key->nome)->orderBy('ETA')->get();
                 
                                          if (count($prevchegada) > 0) {
                                          Mail::send('mail.prevchegadamail',compact('prevchegada'), function($m) use ($key){

                                          $m->from('durval@pinho.com.br', 'Previsão de Chegada');   
                                            
                                          $m->to('durval@pinho.com.br')->subject('PREVISÃO DE CHEGADA');
                                          });  

                 
                                              }
              }

                  
    }



      public static function enviarprealerta()

    {
                                                          
                 $enviarprealerta = DB::table("files")->where('status', '=', '0')->groupBy('referencia')->get();
                 
                 foreach ($enviarprealerta as $key) 
                 {


                     $referencia = DB::table("files")->where('referencia', '=', $key->referencia)->get();
                     foreach ($referencia as $ref) 
                     {

                           
                      $arquivos[] = "public/upload/documentos/$ref->user_id/$ref->name"; 
                      DB::table('files')->where('id', '=', $ref->id)->
                      update(['status' => '1']);

                    
                    }   
                                      $usuario = User::find($key->user_id);
                                     
                                      $agente = DB::table("agentes")->where('nome', '=', $usuario->empresa)->get();
                                      foreach ($agente as $key1) {}

                                      $key1->desconsolidar;  

                                     if ($key1->desconsolidar == 1)
                                      {

                                      Mail::raw('RECEBEMOS DO CLIENTE '.$key1->nome.'  O PRÉ-ALERTA EM ANEXO PARA DESCONSOLIDAR', function($m)
                                      use ($arquivos, $key1){
                                      $m->from('durval@pinho.com.br', 'PRÉ-Alerta');   
                                      $m->to($key1->email1)->cc($key1->email2)->subject('Pré-alerta')->attach($arquivos[0])
                                      ->attach($arquivos[1]);  });  
                                      } else

                                      {
                                       Mail::raw('RECEBEMOS DO CLIENTE '.$key1->nome.'  O PRÉ-ALERTA EM ANEXO. Somente para desconsolidação documental', function($m)
                                      use ($arquivos, $key1){
                                      $m->from('durval@pinho.com.br', 'PRÉ-Alerta');   
                                      $m->to($key1->email1)->cc($key1->email2)->subject('Pré-alerta')->attach($arquivos[0])
                                      ->attach($arquivos[1]);  });  
                                       }
                                    
                       

                                    
                    }
             
                              
    }

    public static function prealertarecebido()
    {
        
    }

    public static function insertmbl()
    {
        //
    }

    public static function updateeta()
    {
        //
    }

    public static function updateatracado()
    {
        //
    }

    public static function updatedesatracado()
    {
        //
    }

    public static function updatepresenca()
    {
        //
    }

    public static function updateliberado()
    {
        //
    }

}