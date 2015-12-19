@extends('layouts.master')

@section('content')

    
    <br>
    <h1>Faturamento Marítimo </h1>
      
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
            Data final:<input class="form-control" id="max" name="max" value="31/12/2015">
        </div>
      </div>
    </div>


    <div class="table">



        {!! Form::open(['url' => 'listarafaturar', 'class' => 'form-horizontal']) !!}
        <table  id="dtable" class="table table-bordered table-striped table-hover"  cellspacing="0" width="100%" style="font-size: 90%;">
              

            <thead>
                <tr>
                   <th>Agente</th><th>MBL</th><th>Chegada</th><th>HBL</th><th>Faturado</th><th>Opção</th>
                </tr>
            </thead> 


            <tfoot>
                <tr>
                   <th>Agente</th><th>MBL</th><th>Chegada</th><th>HBL</th><th>Faturado</th><th>Opção</th>
                </tr>
            </foot> 

                                    
            <tbody>
            {{-- */$x=0;/* --}}

            
         
            @foreach($registros as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->mbls->cnee }}</a></td>
                <td><a>{{ $item->NMbl }}</a></td>
                <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>
                <td><a>{{ $item->NHbl }}</a></td>
                <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?> 
                <td><a><?php echo $a ?> </a></td>
                <td>{!! Form::checkbox('admin[]', $item->id, true) !!}</td>
                
                
            </tr>   
     
            

            @endforeach
             
                <div class="form-group">
                        
                            {!! Form::hidden('agente', $item->cnee, ['class' => 'form-control']) !!}
                            
                       </div>
                    </div>


            </tbody>
        </table>
    </br>
    </br>
    </br>

        <div class="form-group">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::submit('Listar', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

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