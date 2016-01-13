<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hbl;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use App\faturamento;
use App\Mbl;
use App\agente;
use Validator;

class HblController extends Controller
{

    
    public function index()
    {
        $hbls = Hbl::where('finalizado', 0)->orderBy('ETA')->get();

        return view('hbl.index', compact('hbls'));
    }

   
    public function create()
    {   

        return view('hbl.create');
    }

    
    public function store(Request $request)
        {

        $this->validate($request, ['NMbl' => 'required', 'NHbl' => 'required']);
        $registrosmars = DB::table('mbls')->where('Nmbl', '=', $request->NMbl)->get();

        foreach ($registrosmars as $key)  {}
          
         $pod = $key->POD;   
         $data = $key->ETA;
         $ano = SubStr($data, 0,4);
         $referencia = $key->registro;
         $id = $key->id;
         $os = 'OS'.$pod.$id.'/'.$ano;
         $cnee = $key->cnee;
         $mbl = $key->NMbl;

         

         $agenteId = DB::table('agentes')->where('nome', '=', $key->cnee)->get();
         foreach ($agenteId as $item)  {}
           
         $valor =  $item->valordesconsolmaritimo;
        

         
         
       
         Hbl::create(['ETA' => $data, 'NMbl' => $mbl, 'NHbl' => $request->NHbl, 
                            'referencia' => $os, 'mbl_id' => $id, 'shipper' 
                            => $request->shipper, 'cnee' => $request->cnee ,'agente' => $cnee, 'vlrDesconsol' => $valor]);

         $hbl = DB::table('hbls')->where('NHbl', '=', $request->NHbl)->get();
            foreach ($hbl as $item) {}                
            $hblid = $item->id;

        Faturamento::create(['documento' => $request->NHbl, 'data' => $data, 'hbl_id' => $hblid, 
                            'referencia' => $referencia, 'OS' => $os]);

        return redirect('mbl');
    }

    
    public function show($id)
    {
        $hbl = Hbl::findOrFail($id);

        return view('hbl.show', compact('hbl'));
    }

    
    public function edit($id)
    {
        $hbl = Hbl::findOrFail($id);

        return view('hbl.edit', compact('hbl'));
    }

   
    public function update($id, Request $request)
    {
        
        $hbl = Hbl::findOrFail($id);
        $hbl->update($request->all());

        Session::flash('flash_message', 'Hbl successfully updated!');

        return redirect('mbl');
    }

    
    public function destroy($id)
    {
        Hbl::destroy($id);

        Session::flash('flash_message', 'Hbl successfully deleted!');

        return redirect('mbl');
    }

}
