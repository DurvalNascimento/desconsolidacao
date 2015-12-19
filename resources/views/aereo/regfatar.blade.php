@extends('layouts.master')

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
            Data final:<input class="form-control" id="max" name="max" value="01/12/2016">
        </div>
      </div>
    </div>

    <div class="table">

        {!! Form::open(['url' => 'listarafaturaraereo', 'class' => 'form-horizontal']) !!}
        <table  id="dtable" class="table table-bordered table-striped table-hover" style="font-size: 0.9em;">
              

            <thead>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>Chegada</th><th>Valor</th><th>Delivery</th><th>Faturado</th><th>Selecionar</th>
                </tr>
            </thead> 

            <tfoot>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>Chegada</th><th>Valor</th><th>Delivery</th><th>Faturado</th><th>Selecionar</th>
                </tr>
            </tfoot>   
                         
            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($registrosars as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->agente }}</a></td>
                <td><a>{{ $item->NMawb}}</a></td>
                <td><a>{{ $item->datachegada }}</a></td>                
                <td><a>{{ $item->vlrDesconsol}}</a></td>
                <td><a>{{ $item->vlrDelivery}}</a></td>
               <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?>
                <td><a><?php echo $a ?> </a></td>
                <td>{!! Form::checkbox('admin[]', $item->id, true) !!}</td>

                
                
            </tr>   
     
          

            @endforeach
             
         

            </tbody>
            
        </table>
         <div class="form-group">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::submit('Listar', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
        
         </div>
        
@endsection