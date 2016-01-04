@extends('layouts.master')

@section('content')

    <h3>Editar MBL</h3>
    <hr/>

    {!! Form::model($mbl, [
        'method' => 'PATCH',
        'route' => ['mbl.update', $mbl->id],
        'class' => 'form-horizontal'
    ]) !!}

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
            <div class="form-group {{ $errors->has('cnee') ? 'has-error' : ''}}">
                {!! Form::label('cnee', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cnee', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cnee', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('navioPrimeiraPerna') ? 'has-error' : ''}}">
                {!! Form::label('navioPrimeiraPerna', 'Feeder: ', ['class' => 'col-sm-3 control-label']) !!}
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
                {!! Form::label('POL', 'Origem: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('POL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('POL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('POD') ? 'has-error' : ''}}">
                {!! Form::label('POD', 'Destino: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('POD', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('POD', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('transbordo') ? 'has-error' : ''}}">
                {!! Form::label('transbordo', 'Transbordo: ', ['class' => 'col-sm-3 control-label']) !!}
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
            <div class="form-group {{ $errors->has('dataRegCeMbl') ? 'has-error' : ''}}">
                {!! Form::label('dataRegCeMbl', 'Data Registro CE: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('dataRegCeMbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dataRegCeMbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ETA') ? 'has-error' : ''}}">
                {!! Form::label('ETA', 'ETA: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('ETA', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ETA', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('atracado') ? 'has-error' : ''}}">
                {!! Form::label('atracado', 'Data da Atracação: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('atracado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('atracado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('desatracado') ? 'has-error' : ''}}">
                {!! Form::label('desatracado', 'Data da Desatracação: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('desatracado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('desatracado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('armador') ? 'has-error' : ''}}">
                {!! Form::label('armador', 'Armador: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('armador', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('armador', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ativo') ? 'has-error' : ''}}">
                {!! Form::label('desconsolidado', 'Deconsolidado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('ativo', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('desconsolidado', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('desconsolidado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('ALTERAR', ['class' => 'btn btn-primary form-control']) !!}
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