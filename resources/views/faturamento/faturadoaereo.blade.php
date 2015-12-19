@extends('layouts.master')

@section('content')
  
   <br/>
    <br/>

    <h1>
        FATURADO
        
    </h1>      

    <br/>
    <br/>
    
   


    <div class="table">
        <table  class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
           

            <thead>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>Data</th><th>Valor</th><th>Taxa</th><th>Nota Fiscal</th><th>Valor R$</th>
                  
                </tr>
            </thead>

           
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($registros as $item)
                {{-- */$x++;/* --}}
                <tr>
                    
                    <td>{{ $item->agente }}</td>
                    <td>{{ $item->NMawb }}</td>
                    <td><a><?php echo date('d/m/Y', strtotime($item->datachegada)); ?></a></td>
                    <td>{{ $item->vlrDesconsol }}</td>
                    <td>{{ $item->notafiscal->taxaUsd }}</td>
                    <td>{{ $item->notafiscal->numero }}</td>
                    <?php $real = $item->vlrDesconsol * $item->notafiscal->taxaUsd ?>
                    <td>{{ $real}}</td>
                                 
                </tr>
              
                        
            @endforeach
             
            </tbody>                
        </table>

             <td> <div class="form-group">
                        <div class="col-sm-3">

                         <p>  Valor Total da Nota R$: {{ $item->notafiscal->valor }}<p> 
                      
                        </div>

             </div></td>
        
    </div>

@endsection