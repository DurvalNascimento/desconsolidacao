@extends('layouts.master')

@section('content')

    <h3>Criar MBL</h3>
    <hr/>

    {!! Form::open(['route' => 'mbl.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('registro') ? 'has-error' : ''}}">
                {!! Form::label('registro', 'Registro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('registro', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('registro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NMbl') ? 'has-error' : ''}}">
                {!! Form::label('NMbl', 'MBL: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('NMbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NMbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
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
            <div class="form-group {{ $errors->has('navioPrimeiraPerna') ? 'has-error' : ''}}">
                {!! Form::label('navioPrimeiraPerna', 'FEEDER: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('navioPrimeiraPerna', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('navioPrimeiraPerna', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('navio') ? 'has-error' : ''}}">
                {!! Form::label('navio', 'Navio: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('navio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('navio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('viagem') ? 'has-error' : ''}}">
                {!! Form::label('viagem', 'Viagem: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('viagem', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('viagem', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           
            <div class="form-group {{ $errors->has('POL') ? 'has-error' : ''}}">
                {!! Form::label('POL', 'ORIGEM: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('POL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('POL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('POD') ? 'has-error' : ''}}">
                {!! Form::label('POD', 'DESTINO: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('POD', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('POD', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('transbordo') ? 'has-error' : ''}}">
                {!! Form::label('transbordo', 'PORTO TRANSBORDO: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('transbordo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('transbordo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ceMbl') ? 'has-error' : ''}}">
                {!! Form::label('ceMbl', 'CE MBL: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ceMbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ceMbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
          
            <div class="form-group {{ $errors->has('ETA') ? 'has-error' : ''}}">
                {!! Form::label('ETA', 'ETA: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('ETA', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ETA', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           
            <div class="form-group {{ $errors->has('armador') ? 'has-error' : ''}}">
                {!! Form::label('armador', 'Armador: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('armador', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('armador', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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