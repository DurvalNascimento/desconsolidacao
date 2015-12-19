@extends('layouts.master')

@section('content')

    <br/>
    <h1>Editar HBL</h1>
    <hr/>



    {!! Form::model($hbl, [
        'method' => 'PATCH',
        'route' => ['hbl.update', $hbl->id],
        'class' => 'form-horizontal'
    ]) !!}


             <div class="form-group {{ $errors->has('referencia') ? 'has-error' : ''}}">
                {!! Form::label('referencia', 'Referência:', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('referencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NHbl') ? 'has-error' : ''}}">
                {!! Form::label('NHbl', 'HBL: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('NHbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NHbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NMbl') ? 'has-error' : ''}}">
                {!! Form::label('NMbl', 'MBL: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('NMbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NMbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ceHbl') ? 'has-error' : ''}}">
                {!! Form::label('ceHbl', 'CE HBL: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ceHbl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ceHbl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('datace') ? 'has-error' : ''}}">
                {!! Form::label('datace', 'Data Registro CE: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('datace', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('datace', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('cnee') ? 'has-error' : ''}}">
                {!! Form::label('cnee', 'Importador: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cnee', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cnee', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('cnee') ? 'has-error' : ''}}">
                {!! Form::label('cnpjcnee', 'CNPJ CNEE: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cnpjcnee', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cnpjcnee', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('vlrTHC') ? 'has-error' : ''}}">
                {!! Form::label('agente', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('agente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('agente', '<p class="help-block">:message</p>') !!}
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