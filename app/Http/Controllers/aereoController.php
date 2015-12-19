<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\aereo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Validator;

class aereoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $aereos = DB::table('vw_aereo')->orderBy('datachegada')->get();  
        return view('aereo.index', compact('aereos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {    
        $agente = DB::table('agentes')->orderBy('nome')->get();    
        return view('aereo.create', compact('agente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['NMawb' => 'required']); // Uncomment and modify if you need to validate any input.
        aereo::create($request->all());

        Session::flash('flash_message', 'aereo successfully added!');

        return redirect('aereo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $aereo = aereo::findOrFail($id);

        return view('aereo.show', compact('aereo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $aereo = aereo::findOrFail($id);

        return view('aereo.edit', compact('aereo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $aereo = aereo::findOrFail($id);
        $aereo->update($request->all());

        Session::flash('flash_message', 'aereo successfully updated!');

        return redirect('aereo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        aereo::destroy($id);

        Session::flash('flash_message', 'aereo successfully deleted!');

        return redirect('aereo');
    }

    // criadas por mim

     public function agefatar()
    {

        $loggedUser =\Auth::user()->empresa;
        //$registros = Faturamento::latest()->get();
        $registrosars = DB::table('vw_aereo')->where('agente', '=', $loggedUser)->get();
        return view('aereo.agefatar', compact('registrosars'));
    }


    public function regfatar()
    {

        //$registrosars = Registrosar::latest()->get();
        $registrosars = DB::table('vw_aereo')->where('faturado', '=', '0')->get();
        return view('aereo.regfatar', compact('registrosars'));
    }



}
