<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class clienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clientes = cliente::paginate(15);

        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['cnpj' => 'required']); 
        cliente::create($request->all());

        Session::flash('flash_message', 'cliente successfully added!');

        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $cliente = cliente::findOrFail($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $cliente = cliente::findOrFail($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $cliente = cliente::findOrFail($id);
        $cliente->update($request->all());

        Session::flash('flash_message', 'cliente successfully updated!');

        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        cliente::destroy($id);

        Session::flash('flash_message', 'cliente successfully deleted!');

        return redirect('cliente');
    }

}
