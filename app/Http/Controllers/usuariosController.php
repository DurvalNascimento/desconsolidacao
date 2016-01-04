<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\usuarios;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\User;
use DB;

class usuariosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $usuarios = User::paginate(15);

        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {   $clientesagente = DB::table('agentes')->orderBy('nome')->get();
        return view('usuarios.create', compact('clientesagente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        User::create($request->all());

        Session::flash('flash_message', 'usuarios successfully added!');

        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $usuario = User::findOrFail($id);
        $usuario->update($request->all());

        Session::flash('flash_message', 'usuarios successfully updated!');

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message', 'usuarios successfully deleted!');

        return redirect('usuarios');
    }

}
