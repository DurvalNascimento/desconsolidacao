@extends('layouts.master')

@section('content')

      </br>  
      </br> 
      </br> 
    <div class="col-sm-12">  
      <div class="col-sm-2">
        <div>
            <i class="fa fa-calendar"></i>
            Data inicial:<input class="form-control" id="min" name="min" value="01/01/2015">
        </div>
      </div>
      <div class="col-sm-2">
        <div>
            <i class="fa fa-calendar"></i>
            Data final:<input class="form-control" id="max" name="max" value="01/12/2016">
        </div>
      </div>
    </div>
       

   
    <div class="table">
        <table id="dtable" class="table table-bordered table-striped table-hover" style="font-size: 0.9em;">
            <thead>
                <tr>
                    <th>Registro</th><th>Agente</th><th>Chegada</th><th>MAWB</th><th>HAWB</th><th>Destino</th>
                </tr>
            </thead>   


            <tfoot>
                <tr>
                    <th>Registro</th><th>Agente</th><th>Chegada</th><th>MAWB</th><th>HAWB</th><th>Destino</th>
                </tr>
            </tfoot>     


            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($registrosars as $item)
                {{-- */$x++;/* --}}
                <tr>
                    
                    <td><a href="{{ url('/registrosar', $item->id) }}">{{ $item->registro }}</a><td>{{ $item->agente }}</td><td>{{ $item->dataChegada }}</td><td>{{ $item->NMawb }}</td><td>{{ $item->NHawb }}</td><td>{{ $item->destino }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection