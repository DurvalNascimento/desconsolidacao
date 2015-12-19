@extends('layouts.master')

@section('content')

    <h3>Aéreos <a href="{{ route('aereo.create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Registro</a></h3>


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
        <table id='dtable' class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
            <thead>
                <tr>
                    <th>Registro</th><th>HAWB</th><th>Chegada</th><th>Agente</th><th>MAWB</th><th>Actions</th>
                </tr>
            </thead>

             <tfoot>
                <tr>
                    <th>Registro</th><th>HAWB</th><th>Chegada</th><th>Agente</th><th>MAWB</th><th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
            
            @foreach($aereos as $item)
              
                <tr>
                    
                    <td><a href="{{ url('/aereo', $item->id) }}">{{ $item->registro }}</a></td><td>{{ $item->NHawb }}</td><td>{{ $item->datachegada }}</td><td>{{ $item->agente }}</td><td>{{ $item->NMawb }}</td>
                    <td>
                        <a href="{{ route('aereo.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['aereo.destroy', $item->id],
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
