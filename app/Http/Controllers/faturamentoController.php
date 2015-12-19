<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\faturamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use App\Mbl;
use App\notafiscal;
use App\Hbl;
use App\aereo;

class faturamentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faturamentos = faturamento::paginate(15);

        return view('faturamento.index', compact('faturamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('faturamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        faturamento::create($request->all());

        Session::flash('flash_message', 'faturamento successfully added!');

        return redirect('faturamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $faturamento = faturamento::findOrFail($id);

        return view('faturamento.show', compact('faturamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $faturamento = faturamento::findOrFail($id);

        return view('faturamento.edit', compact('faturamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
           
        $faturamento = faturamento::findOrFail($id);
        $faturamento->update($request->all());

        Session::flash('flash_message', 'faturamento successfully updated!');

        return redirect('faturamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        faturamento::destroy($id);

        Session::flash('flash_message', 'faturamento successfully deleted!');

        return redirect('faturamento');
    }



    // meus metodos

    public function listarafaturar(Request $request)
    {
                 
                    $regselect =  $request->admin;

                     foreach ($regselect as $key)
                               {

                               $registros[] = Hbl::findOrFail($key);
                              
                               }  
                       
                        
                      return view('faturamento.listafaturarmar', compact('registros'));

    }



    public function faturamentomaritimo()
    {
            
        $clientesagente = DB::table('agentes')->orderBy('nome')->get();
        return view('faturamento.faturamentomaritimo', compact('clientesagente'));
    }

    public function faturarmaritimo(Request $request)
    {   
            $notafiscals = Notafiscal::latest()->where('status','0')->get(); 
            $agente = $request->agente_nome;
 
       
            $registros = Hbl::where('faturado', 0)->where('agente', $agente)->get();
           

            if(count($registros) > 0)
                {
                    return view('faturamento.faturarmaritimo', compact('registros','notafiscals'));
                }   
                else
                {
                    $clientesagente = DB::table('agentes')->orderBy('nome')->get();
                    return view('faturamento.faturamentomaritimo', compact('clientesagente'));
                }
                      
        

   
          return view('faturamento.faturarmaritimo', compact('registros','notafiscals')); 
        
    }

            public function concluirfaturamentomaritimo(Request $request)

            {       
                    $ag = $request->agente;


                   $agente = DB::table('agentes')->where('nome', '=', $ag)->get();


                   foreach($agente as $item){ }

                   $valor =  $item->valordesconsolmaritimo;


                    $nf = $request->nf;

                    $regselect =  $request->admin;

                    if ($nf == '')
                    
                    {
                      return redirect('notafiscal');

                    }

                    $nota = DB::table('notafiscals')->where('numero', '=', $nf)->get();

                    
                    foreach($nota as $item){ }

                     $id =  $item->id;
                     $data = $item->data;
                         

                              foreach ($regselect as $key)
                                {

                               $registroshbl = Hbl::findOrFail($key);
                               DB::table('hbls')->where('id', '=', $registroshbl->id)->
                               update(['notafiscal_id' => $id, 'faturado' => '1', 'finalizado' => '1',  
                               'vlrDesconsol' => $valor, 'dataFaturamento' => $data]);
                               DB::table('faturamentos')->where('hbl_id', '=', $key)->update(['status' => '1']);

                           
                              
                               $mbl =  DB::table('mbls')->where('NMbl', '=', $registroshbl->NMbl)->get();
                               foreach ($mbl as $key1) {}                            
                               
                               DB::table('mbls')->where('id', '=', $key1->id)->
                               update(['id_notafiscal' => $id, 'faturado' => '1', 'finalizado' => '1',  
                               'dataFaturamento' => $data]);

                                }  

                               

                                          
                                 $notafiscals = notafiscal::find($id);

                                 $registros = $notafiscals->hbls;


                       
                            
                            DB::table('notafiscals')->where('id', '=', $id)->update(['status' => '1']);
                            
                            return view('faturamento.faturadomaritimo', compact('registros'));

        }


        public function regfat()
    {

             
                $registros = Hbl::where('faturado', 0)
               ->get();
                
                return view('faturamento.regfat', compact('registros'));
    } 


        // faturamento aereo


        public function faturamentoaereo()
    {
            
        $clientesagente = DB::table('agentes')->orderBy('nome')->get();
        return view('faturamento.faturamentoaereo', compact('clientesagente'));
    }

    public function faturaraereo(Request $request)
    {   
        $notafiscals = Notafiscal::latest()->where('status', '=', '0')->get(); 
        
        

        $agente = $request->cliente_id;


        $registrosar = DB::table('vw_aereo')->where('agente', '=', $agente)->where('faturado', '==', '0')->get();
        return view('faturamento.faturaraereo', compact('registrosar','notafiscals')); 
        
    }

            public function concluirfaturamentoaereo(Request $request)

            {       


                    $nf = $request->nf;

                    $id_agente =  $request->admin;

                    if ($nf == '')
                    
                    {
                      return redirect('notafiscal');

                    }

                    
                    $nota = DB::table('notafiscals')->where('numero', '=', $nf)->get();

                    
                    foreach($nota as $item){ }

                     $id =  $item->id;
                     $data = $item->data;
                                                            
                                foreach ($id_agente as $key)
                                {

                                $registrosar = aereo::findOrFail($key);
                                DB::table('aereos')->where('id', '=', $registrosar->id)->update(['notafiscal_id' 
                                => $id, 'faturado' => '1','finalizado' => '1', 'dataFaturamento' => $data]);
                                }      

                        $notafiscals = notafiscal::find($id);

                        $registros = $notafiscals->aereos;

                

                        return view('faturamento.faturadoaereo', compact('registros'));
        }


         public function listarafaturaraereo(Request $request)
    {
                 
                    $regselect =  $request->admin;

                     foreach ($regselect as $key)
                               {

                               $registros[] = aereo::findOrFail($key);
                              
                               }  
                       
                        
                      return view('faturamento.listarafaturaraereo', compact('registros'));

    }

}


