@extends('layouts.master')

@section('content')

    <h3>Selecionar Agente</h3>
    <hr/>

   {!! Form::open(['url' => 'fileup', 'class' => 'form-horizontal']) !!}
                  <div class="form-group">
                {!! Form::label('cnee', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-6">
                      <select class="form-control" name="cnee" id="cnee">
                           @foreach($clientesagente as $cliente)
                                    <option value="{{ $cliente->nome }}">{!! $cliente->nome !!}</option>
                           @endforeach
                         </select>
                        </div>
            </div>
            

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Continuar', ['class' => 'btn btn-primary form-control']) !!}
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

@endsection