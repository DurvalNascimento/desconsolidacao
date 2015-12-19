@extends('layouts.master')

@section('content')

    <h1>Criar Faturamento</h1>
    <hr/>

    {!! Form::open(['route' => 'faturamento.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('OS') ? 'has-error' : ''}}">
                {!! Form::label('OS', 'Os: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('OS', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('OS', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('documento') ? 'has-error' : ''}}">
                {!! Form::label('documento', 'Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('data') ? 'has-error' : ''}}">
                {!! Form::label('data', 'Data: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('data', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('hbl_id') ? 'has-error' : ''}}">
                {!! Form::label('hbl_id', 'Hbl Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('hbl_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('hbl_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('referencia') ? 'has-error' : ''}}">
                {!! Form::label('referencia', 'Referencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('referencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('referencia', '<p class="help-block">:message</p>') !!}
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