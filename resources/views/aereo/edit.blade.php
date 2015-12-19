@extends('layouts.master')

@section('content')

    <h3>Editar Registro</h3>
    <hr/>

    {!! Form::model($aereo, [
        'method' => 'PATCH',
        'route' => ['aereo.update', $aereo->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('registro') ? 'has-error' : ''}}">
                {!! Form::label('registro', 'Registro: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('registro', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('registro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('referencia') ? 'has-error' : ''}}">
                {!! Form::label('referencia', 'Referencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('referencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('agente') ? 'has-error' : ''}}">
                {!! Form::label('agente', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('agente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('agente', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NMawb') ? 'has-error' : ''}}">
                {!! Form::label('NMawb', 'Nmawb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('NMawb', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NMbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NHawb') ? 'has-error' : ''}}">
                {!! Form::label('NHawb', 'Nhawb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('NHawb', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NHawb', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('origem') ? 'has-error' : ''}}">
                {!! Form::label('origem', 'Origem: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('origem', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('origem', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('destino') ? 'has-error' : ''}}">
                {!! Form::label('destino', 'Destino: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('destino', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('destino', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('datachegada') ? 'has-error' : ''}}">
                {!! Form::label('datachegada', 'Datachegada: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('datachegada', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('datachegada', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('vlrDesconsol') ? 'has-error' : ''}}">
                {!! Form::label('vlrDesconsol', 'Vlrdesconsol: ', ['class' => 'col-sm-3 control-label', 'step' => 'any']) !!}
                <div class="col-sm-6">
                    {!! Form::number('vlrDesconsol', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('vlrDesconsol', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('vlrDelivery') ? 'has-error' : ''}}">
                {!! Form::label('vlrDelivery', 'Vlrdelivery: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('vlrDelivery', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('vlrDelivery', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('faturado') ? 'has-error' : ''}}">
                {!! Form::label('faturado', 'Faturado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('faturado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('faturado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dataFaturamento') ? 'has-error' : ''}}">
                {!! Form::label('dataFaturamento', 'Datafaturamento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('dataFaturamento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dataFaturamento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('finalizado') ? 'has-error' : ''}}">
                {!! Form::label('finalizado', 'Finalizado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('finalizado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('finalizado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('custoDesconsol') ? 'has-error' : ''}}">
                {!! Form::label('custoDesconsol', 'Custodesconsol: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('custoDesconsol', null, ['class' => 'form-control', 'step' => 'any']) !!}
                    {!! $errors->first('custoDesconsol', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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