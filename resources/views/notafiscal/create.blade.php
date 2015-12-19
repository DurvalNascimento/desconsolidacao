@extends('layouts.master')

@section('content')

    <h1>Create New Notafiscal</h1>
    <hr/>

    {!! Form::open(['route' => 'notafiscal.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('numero') ? 'has-error' : ''}}">
                {!! Form::label('numero', 'Numero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('taxaUsd') ? 'has-error' : ''}}">
                {!! Form::label('taxaUsd', 'Taxausd: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('taxaUsd', null, ['class' => 'form-control', 'step' => 'any']) !!}
                    {!! $errors->first('taxaUsd', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
                {!! Form::label('valor', 'Valor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('valor', null, ['class' => 'form-control', 'step' => 'any']) !!}
                    {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('status', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('status', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
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