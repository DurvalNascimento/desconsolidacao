@extends('layouts.master')

@section('content')
  

    <h1>
        FATURADO
        
    </h1>      

    <br/>
    <br/>
    <br/>
   


    <div class="table">
        <table  class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
           

            <thead>
                <tr>
                   <th>Agente</th><th>MBL</th><th>HBL</th><th>Data Faturamento</th><th>Valor</th><th>Taxa</th><th>Nota Fiscal</th><th>Valor R$</th>
                  
                </tr>
            </thead>

           
            <tbody>
            

         

            @foreach($registros as $item)
                <tr>
                    
                    <td>{{ $item->agente }}</td>
                    <td>{{ $item->NMbl }}</td>
                    <td>{{ $item->NHbl }}</td>
                    <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>
                    <td>{{ $item->vlrDesconsol}}</td>
                    <td>{{ $item->nf->taxaUsd }}</td>
                    <td>{{ $item->nf->numero }}</td>
                    <?php $real = $item->vlrDesconsol * $item->nf->taxaUsd ?>
                    <td>{{ $real}}</td>

                    
                                 
                </tr>
              
                        
            @endforeach
             
            </tbody>                
        </table>

             <td> <div class="form-group">
                        <div class="col-sm-3">

                         <p>  Valor Total da Nota R$: {{ $item->nf->valor }}<p> 
                      
                        </div>
             </div></td>
        
    </div>

@endsection