<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\documento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class documentoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $documentos = documento::paginate(15);

        return view('documento.index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('documento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        documento::create($request->all());

        Session::flash('flash_message', 'documento successfully added!');

        return redirect('documento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $documento = documento::findOrFail($id);

        return view('documento.show', compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $documento = documento::findOrFail($id);

        return view('documento.edit', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $documento = documento::findOrFail($id);
        $documento->update($request->all());

        Session::flash('flash_message', 'documento successfully updated!');

        return redirect('documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        documento::destroy($id);

        Session::flash('flash_message', 'documento successfully deleted!');

        return redirect('documento');
    }

}
