@extends('layouts.master')

@section('content')

<br/>

    <h1>Nota Fiscal <a href="{{ route('notafiscal.create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Nota Fiscal</a></h1>

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
            Data final:<input class="form-control" id="max" name="max" value="30/06/2016">
        </div>
      </div>
    </div>
    <div class="table">
        <table id='dtable' class="table table-bordered table-condensed table-hover" style="font-size: 0.8em;">
            <thead>
                <tr>
                    <th>Número</th><th>Valor</th><th>Data</th><th>Taxa</th><th>Cliente</th><th>Status</th><th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Número</th><th>Valor</th><th>Data</th><th>Taxa</th><th>Cliente</th><th>Status</th><th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
        
            @foreach($notafiscals as $item)
       
                <tr>
                  
                   <td><a href="{{ url('/notafiscal', $item->id) }}">
                   {{ $item->numero }}</a></td><td>{{ $item->valor }}</td><td><?php echo date('d/m/Y', strtotime($item->data)); ?></td>
                   </td><td>{{ $item->taxaUsd }}</td><td>{{ $item->agente }}</td>
                   <td><?php if ($item->status == '0') {$a = 'Aguardando';} else {$a = 'Faturada';} ?> 
                   <a><?php echo $a ?> </a></td>

                    <td>
                        <a href="{{ route('notafiscal.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['notafiscal.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>

@endsection
