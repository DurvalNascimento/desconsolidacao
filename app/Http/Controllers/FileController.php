<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\File;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;

use Input;
use Validator;
use Redirect;
use Session;
use App\Http\Controllers\MblController;
use Mail;
use App\agente;
use DB;
use App\Mbl;

class FileController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $files = File::latest()->get();
    return view('file.index', compact('files'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('file.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    //$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
    File::create($request->all());
    return redirect('file');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $file = File::findOrFail($id);
    return view('file.show', compact('file'));
  }

  public function findUser($id)
  {
    $file = File::findOrFail($id);
    return $file;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $file = File::findOrFail($id);
    return view('file.edit', compact('file'));
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
    $file = File::findOrFail($id);
    $file->update($request->all());
    return redirect('file');
  }

  
  //public function destroy($id)
  //{
  //  File::destroy($id);
  //  return redirect('file');
  //}

   public function fileupagente()
    {
       
    
        $userId = \Auth::user()->id;

        $user = \App\User::with('files')->find($userId);
        //$user = DB::table('files')->where('id', '=', $userId)->get();
        
        return view('file.fileupadminagente')->with(compact('user'));
         
      }

 public function fileup()
    {

        //$user = \App\User::with('files')->find($userId);

        $userId = \Auth::user()->id;

        $user = \App\User::with('files')->find($userId);
        //$user = DB::table('files')->where('id', '=', $userId)->get();
        if ($userId == 1) 
        {
        
        return view('file.fileupadmin')->with(compact('user'));
      } else 

      {
        return view('file.fileupadminagente')->with(compact('user'));
      }
   
    }


    public function multiple_upload() {
        // getting all of the post data
        $files = Input::file('docs');
        // Making counting of uploaded images
        $file_count = count($files);
        // start count how many uploaded


        foreach($files as $file) {
          $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          $validator = Validator::make(array('file'=> $file), $rules);
          if($validator->passes()){

            $user_id = \Request::get('user_id');
            $ref = \Request::get('referencia');
            $hbl = \Request::get('hbl');
            $armador = \Request::get('armador');
            


            $destinationPath = 'upload/documentos/'.$user_id;
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
          
            File::create(['name'=>$filename, 'referencia'=>$ref, 'user_id'=>$user_id, 'hbl'=>$hbl, 'armador'=>$armador]);  

          }
        }


        if ($file_count == 2) {
          
        
        $user_id = \Request::get('user_id');
        $usuario = User::find($user_id);
                              
        $agente = DB::table("agentes")->where('nome', '=', $usuario->empresa)->get();
        foreach ($agente as $key) {}


        $ref = \Request::get('referencia');
        $agente1 = agente::find($key->id);
        $mbl = Mbl::where('NMbl', $ref)->get();

        foreach ($mbl as $item) {}
         if (!empty($item->id)) {
         DB::table('mbls')->where('id', '=', $item->id)->update(['prealerta' => '1']);
          
        } else { Mail::raw('O Pré-Alerta referente ao Mbl '.$ref.',  recebido a poucos minutos não está cadastrado no sistem ainda - 
                OBS: isto é um teste do sistema', function($m)
                 {
                 $m->from('durval@pinho.com.br', 'PRÉ-Alerta');   
                 $m->to('durval@pinho.com.br')->cc('desconsol@pinho.com.br')->subject('Pré-alerta'); }); }
   

                 Mail::raw('RECEBEMOS PRÉ-ALERTA REFERENTE AO MBL '.$ref.',  Obrigado', function($m) use ($agente1)
                 {
                 $m->from('durval@pinho.com.br', 'PRÉ-Alerta');   
                 $m->to($agente1->email1)->subject('Pré-alerta'); });  


                return Redirect::to('fileup');

         } 
        
     
    }


    public function upload()
    {
        /**
        * Request related
        */
        $file = \Request::file('documento');

        $userId = \Request::get('userId');

        $ref = \Request::get('referencia');



        /**
        * Storage related
        */
        $storagePath = storage_path().'/documentos/'.$userId;

        $fileName = $file->getClientOriginalName();

        /**
        * Database related
        */
        $fileModel = new \App\File();
        $fileModel->name = $fileName;
        $fileModel->referencia = $ref;


        $user = \App\User::find($userId);

        $user->file()->save($fileModel);

        return $file->move($storagePath, $fileName);
    }



    public function download($userId, $fileId)
    {
        $file = \App\File::find($fileId);

        $storagePath = 'upload/documentos/'.$userId;

        return \Response::download($storagePath.'/'.$file->name);
    }



    public function destroy($userId, $fileId)
    {
        $file = \App\File::find($fileId);

        $storagePath = 'upload/documentos/'.$userId;

        $file->delete();

        unlink($storagePath.'/'.$file->name);

        return redirect()->back()->with('success', 'Arquivo removido com sucesso!');
    }    
}


