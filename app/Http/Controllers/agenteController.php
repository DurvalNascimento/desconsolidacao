<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\agente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class agenteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $agentes = agente::paginate(15);

        return view('agente.index', compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('agente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        agente::create($request->all());

        Session::flash('flash_message', 'agente successfully added!');

        return redirect('agente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $agente = agente::findOrFail($id);

        return view('agente.show', compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $agente = agente::findOrFail($id);

        return view('agente.edit', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $agente = agente::findOrFail($id);
        $agente->update($request->all());

        Session::flash('flash_message', 'agente successfully updated!');

        return redirect('agente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        agente::destroy($id);

        Session::flash('flash_message', 'agente successfully deleted!');

        return redirect('agente');
    }

}
