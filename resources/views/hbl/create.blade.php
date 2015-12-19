@extends('layouts.master')

@section('content')

<br/>
<br/>

    <h1>Incluir HBL</h1>
    <hr/>

    {!! Form::open(['route' => 'hbl.store', 'class' => 'form-horizontal']) !!}

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
                                    
            <div class="form-group {{ $errors->has('shipper') ? 'has-error' : ''}}">
                {!! Form::label('shipper', 'Exportador: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('shipper', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shipper', '<p class="help-block">:message</p>') !!}
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