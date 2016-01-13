<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\notafiscal;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\aereo;
use App\Mbl;
use App\agente;


class notafiscalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $notafiscals = notafiscal::paginate(100);

        return view('notafiscal.index', compact('notafiscals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('notafiscal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        notafiscal::create($request->all());

        Session::flash('flash_message', 'notafiscal successfully added!');

        return redirect('notafiscal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $notafiscal = notafiscal::findOrFail($id);

        return view('notafiscal.show', compact('notafiscal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $notafiscal = notafiscal::findOrFail($id);

        return view('notafiscal.edit', compact('notafiscal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $notafiscal = notafiscal::findOrFail($id);
        $notafiscal->update($request->all());

        Session::flash('flash_message', 'notafiscal successfully updated!');

        return redirect('notafiscal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        notafiscal::destroy($id);

        Session::flash('flash_message', 'notafiscal successfully deleted!');

        return redirect('notafiscal');
    }

}
