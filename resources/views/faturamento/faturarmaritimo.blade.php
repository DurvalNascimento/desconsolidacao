@extends('layouts.master')

@section('content')
  

    


        </br>
        </br>
        </br>

   
 {!! Form::open(['url' => 'concluirfaturamentomaritimo', 'class' => 'form-horizontal']) !!}

    <div class="table">
        <table  class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
           

            <thead>
                <tr>
                   <th>Agente</th><th>MBL</th><th>Data</th><th>Id</th>
                  
                </tr>
            </thead>

           
            <tbody>
            {{-- */$x=0;/* --}}


                @foreach($registros as $item)
                {{-- */$x++;/* --}}
                <tr>
                    
                    <td>{{ $item->agente }}</td>
                    <td>{{ $item->NMbl }}</td>
                    <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>
                    <td>{{ $item->id}}</td>
                    <td>{!! Form::checkbox('admin[]', $item->id, false) !!}</td>
                   
                            
                                   
                </tr>
              
                        
            @endforeach

        

             
            </tbody>                
        </table>


                    <div class="form-group">
                        {!! Form::label('nf', 'Nota Fiscal: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::text('nf', null, ['class' => 'form-control']) !!}
                            {!! Form::hidden('agente', $item->agente, ['class' => 'form-control']) !!}
                            
                       </div>
                    </div>

                    
   


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::submit('Faturar', ['class' => 'btn btn-primary form-control']) !!}
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



    <h5>Nota Fiscal</h5>
    <div class="table">
        <table class="table table-bordered table-striped table-hover" style="font-size: 80%;">
            <thead>
                <tr>
                    <th>Número</th><th>Valor</th><th>Data</th><th>TaxaUsd</th><th>Actions</th>
                </tr>
            </thead>

            

            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($notafiscals as $item)
                {{-- */$x++;/* --}}
                <tr>
                    
                    <td><a href="{{ url('/notafiscal', $item->id) }}">{{ $item->numero }}</a></td><td>{{ $item->valor }}</td><td>{{ $item->data }}</td><td>{{ $item->taxaUsd }}</td>
                    <td><a href="{{ url('/notafiscal/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection