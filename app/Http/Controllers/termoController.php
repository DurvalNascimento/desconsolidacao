<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\termo;
use Illuminate\Http\Request;
use Carbon\Carbon;



use App\User;
use Input;
use Validator;
use Redirect;
use Session;
use App\Hbl;




class termoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $termos = termo::latest()->get();
        return view('termo.index', compact('termos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $hbls = hbl::where('finalizado',0)->get();
        return view('termo.create', compact('hbls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
        termo::create($request->all());
        return redirect('termo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $termo = termo::findOrFail($id);


        $storagePath = 'upload/termos';

        $link = $storagePath.'/'.$termo->name;

        return view('termo.show', compact('termo', 'link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $termo = termo::findOrFail($id);
        return view('termo.edit', compact('termo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
        $termo = termo::findOrFail($id);
        $termo->update($request->all());
        return redirect('termo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        termo::destroy($id);
        return redirect('termo');
    }


    public function upload() {
        // getting all of the post data
        $file = \Request::file('termo');
        // Making counting of uploaded images


        if(!is_null($file)) {
          //$rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          //$validator = Validator::make(array('file'=> $file), $rules);
          //if($validator->passes()){

            //$user_id = \Request::get('user_id');
            $hbl = \Request::get('hbl_id');

            $destinationPath = 'upload/termos';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
          
            termo::create(['name'=>$filename, 'hbl_id'=>$hbl]);  

            Session::flash('success', 'Upload successfully'); 
            return Redirect::to('termo');
        }else {
          return Redirect::to('termo');
        }
    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function showSign($id)
    {
        $termo = termo::findOrFail($id);


        $storagePath = 'upload/termos';

        $link = $storagePath.'/'.$termo->name;

        return view('termo.showSign', compact('termo', 'link'));
    }
}
