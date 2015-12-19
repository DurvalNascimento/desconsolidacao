<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesCommands;
use App\Console\Commands\sendmailCommand;
use DB;


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

    
    public function store(Request $request)
       {        
            $user = 'durval';
        
             Mail::send('mbl.prevchegadamail',['user' => $user], function($m){

             $m->from('durval@pinho.com.br', 'Your Application');   
            
             $m->to('durval@pinho.com.br')->subject('testes');
     });
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

}