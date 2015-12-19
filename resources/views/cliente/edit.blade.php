@extends('layouts.master')

@section('content')

    <h1>Edit Cliente</h1>
    <hr/>

    {!! Form::model($cliente, [
        'method' => 'PATCH',
        'route' => ['cliente.update', $cliente->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('nome', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cnpj') ? 'has-error' : ''}}">
                {!! Form::label('cnpj', 'Cnpj: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
                {!! Form::label('endereco', 'Endereco: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('emailtermo') ? 'has-error' : ''}}">
                {!! Form::label('emailtermo', 'Emailtermo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('emailtermo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('emailtermo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
                {!! Form::label('telefone', 'Telefone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('id_agente') ? 'has-error' : ''}}">
                {!! Form::label('id_agente', 'Id Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('id_agente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('id_agente', '<p class="help-block">:message</p>') !!}
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