@extends('layouts.master')

@section('content')

    <h1>Create New Documento</h1>
    <hr/>

    {!! Form::open(['route' => 'documento.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
                {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
                {!! Form::label('numero', 'Numero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('vias') ? 'has-error' : ''}}">
                {!! Form::label('vias', 'Vias: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('vias', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('vias', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('agente') ? 'has-error' : ''}}">
                {!! Form::label('agente', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('agente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('agente', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('destinatario') ? 'has-error' : ''}}">
                {!! Form::label('destinatario', 'Destinatario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('destinatario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('destinatario', '<p class="help-block">:message</p>') !!}
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