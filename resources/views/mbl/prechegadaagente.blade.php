@extends('layouts.layoutagente')

@section('content')

   <p>
        <div class="col-sm-2">
          Data Inicio:<input class="form-control" id="min" name="min" type="date" value="2015-01-01" id="dataChegada">
            Data Fim:<input class="form-control" id="max" name="max" type="date" value="2015-12-31" id="dataChegada">
        </div>
    </p> 

   <br>

    <h1>PREVISÃO DE CHEGADA </h1>
    <div class="table">
        <table  id="dtable" class="table table-bordered table-striped table-hover"  cellspacing="0" width="100%" style="font-size: 0.9em;">
            <thead>
                <tr>
                   <th>Registro</th><th>Destino</th><th>Prev.Chegada</th><th>MBL</th><th>HBL</th><th>Navio</th>
                </tr>
            </thead>   

            

            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($maritimos as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                <td><a>{{ $item->registro}}</a></td>
                <td><a>{{ $item->POD}}</a></td>
                <td><a>{{ $item->ETA}}</a></td>
                <td><a>{{ $item->NMbl }}</a></td>
                <td><a>{{ $item->NHbl }}</a></td>
                <td><a>{{ $item->mainvessel}}</a></td>
                
                
     
           
            @endforeach
             
         

            </tbody>
        </table>

            
             


    </div>

@endsection