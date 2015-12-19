@extends('layouts.master')

@section('content')

    
    <br>
    <h1>Registros para Faturamento </h1>
      
    
    <div class="table">


       <table class="table table-bordered table-striped table-hover"  cellspacing="0" width="100%" style="font-size: 90%;">
              

            <thead>
                <tr>
                   <th>Agente</th><th>HBL</th><th>HBL</th><th>Chegada</th><th>Faturado</th><th>POD</th>
                </tr>
            </thead> 


                                               
            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($registros as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->mbls->cnee }}</a></td>
                <td><a>{{ $item->NHbl }}</a></td>
                <td><a>{{ $item->NMbl }}</a></td>
                <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>                
                <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?> 
                <td><a><?php echo $a ?> </a></td>
                <td><a>{{ $item->mbls->POD }}</a></td>
                              
                
            </tr>   
     
            

            @endforeach
             
            </tbody>
        </table>
    </br>
    </br>
    </br>

        
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

         
    </div>

        
         </div>
        
@endsection