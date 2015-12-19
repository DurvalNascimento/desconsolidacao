@extends('layouts.master')

@section('content')

    <br/>
    <br/>

    <h1>Hbls <a href="{{ route('hbl.create') }}" class="btn btn-primary pull-right btn-sm">Adicionar HBL</a></h1>

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
                    <th>Agente</th><th>MBL</th><th>ETA</th><th>HBL</th><th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Agente</th><th>HBL</th><th>ETA</th><th>MBL</th><th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
           
            @foreach($hbls as $item)
               
                <tr>
              
                    <td><a href="{{ url('/hbl', $item->id) }}">{{ $item->mbls->cnee }}</a></td><td>{{ $item->NMbl }}</td><td><?php echo date('d/m/Y', strtotime($item->mbls->ETA)); ?></td><td>{{ $item->NHbl }}</td>
                    <td>
                        <a href="{{ route('hbl.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['hbl.destroy', $item->id],
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
