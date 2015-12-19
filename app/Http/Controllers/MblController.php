<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mbl;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Mail;
use App\Hbl;
use Redirect;
use User;


class MblController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $mblsativos = DB::table("vw_mbl")->where('finalizado', '=', '0')->orderBy('ETA')->get();
        $mblsfinalizados = DB::table("vw_mbl")->where('finalizado', '=', '1')->orderBy('ETA')->get();
        $prevchegada = DB::table("vw_mbl")->where('atracado', '=', '00/00/0000')->orderBy('ETA')->get();
        $hbls = Hbl::where('finalizado', 0)->orderBy('ETA')->get();

         return view('mbl.index', compact('mblsativos','mblsfinalizados', 'prevchegada', 'hbls' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   
        $clientesagente = DB::table('agentes')->orderBy('nome')->get();
        return view('mbl.create', compact('clientesagente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['NMbl' => 'required', 'cnee' => 'required', 'ETA' => 'required']);
        Mbl::create($request->all());

        Session::flash('flash_message', 'Mbl successfully added!');

        return redirect('mbl');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $mbl = Mbl::findOrFail($id);

        return view('mbl.show', compact('mbl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $mbl = Mbl::findOrFail($id);

        return view('mbl.edit', compact('mbl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $mbl = Mbl::findOrFail($id);
        $mbl->update($request->all());

        Session::flash('flash_message', 'Mbl successfully updated!');

        return redirect('mbl');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Mbl::destroy($id);

        Session::flash('flash_message', 'Mbl successfully deleted!');

        return redirect('mbl');
    }



    // funções minhas


     public function menu()
    {           
        return view('menu.index');
      
    }
       

      public function menuagente()
    {           
        return view('menu.menuagente');
      
    }

     public function addfreetime($id)

    {
        $maritimos = mbl::findOrFail($id);
        return view('mbl.addfreetime', compact('maritimos'));

    }

        public function reg()
    {

         $loggedUser =\Auth::user()->empresa;
        
        //$registros = Registro::latest()->get();
        $maritimos = DB::table('vw_mbl')->where('agente', '=', $loggedUser)->get();
        return view('mbl.listareg', compact('maritimos')); 
    }

        public function prevchegada()
    {           
        //$registros = Registro::latest()->get();
        $maritimos = DB::table("vw_mbl")->where('atracado', '=', '00/00/0000')->orderBy('ETA')->get();
        return view('mbl.prevchegada', compact('maritimos'));  
    }

        public function prevchegadaagente()
    {

         $loggedUser =\Auth::user()->empresa;
        
        //$registros = Registro::latest()->get();
        $maritimos = DB::table('vw_mbl')->where('agente', '=', $loggedUser)->where('dataAtrac', '=', '00/00/0000')->get();
        return view('mbl.prechegadaagente', compact('maritimos')); 
    }


         public function agefat()
    {

        $loggedUser =\Auth::user()->empresa;
        //$registros = Faturamento::latest()->get();
        $maritimos = DB::table('vw_mbl')->where('agente', '=', $loggedUser)->get();
        return view('mbl.agefat', compact('maritimos'));
    }





}
