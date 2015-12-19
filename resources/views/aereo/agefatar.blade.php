@extends('layouts.layoutagente')

@section('content')

    
    <br>
    <h1>Faturamento Aéreo  </h1> 

      
    
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
            Data final:<input class="form-control" id="max" name="max" value="01/12/2015">
        </div>
      </div>
    </div>

    <div class="table">
        <table  id="bunda" class="table table-bordered table-striped table-hover" style="font-size: 0.9em;">
              

            <thead>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>Chegada</th><th>Valor</th><th>Delivery</th><th>HAWB</th><th>Faturado</th>
                </tr>
            </thead> 

            <tfoot>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>Chegada</th><th>Valor</th><th>Delivery</th><th>HAWB</th><th>Faturado</th>
                </tr>
            </tfoot>   
                         
            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($registrosars as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->clienteAgente }}</a></td>
                <td><a>{{ $item->NMawb}}</a></td>
                <td><a>{{ $item->dataChegada }}</a></td>                
                <td><a>{{ $item->vlrDesconsol}}</a></td>
                <td><a>{{ $item->vlrDelivery}}</a></td>
                <td><a>{{ $item->NHawb}}</a></td>
                <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?>
                <td><a><?php echo $a ?> </a></td>

                
                
            </tr>   
     
          

            @endforeach
             
         

            </tbody>
            
        </table>

        
         </div>
        
@endsection