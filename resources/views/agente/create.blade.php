@extends('layouts.master')

@section('content')

    <h3>Adicionar AGente</h3>
    <hr/>

    <br/>
    {!! Form::open(['route' => 'agente.store', 'class' => 'form-horizontal']) !!}

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
                {!! Form::label('endereco', 'Endereço: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email1') ? 'has-error' : ''}}">
                {!! Form::label('email1', 'E-mail: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email2') ? 'has-error' : ''}}">
                {!! Form::label('email2', 'E-mail: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
                {!! Form::label('telefone', 'Telefone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valordesconsolmaritimo') ? 'has-error' : ''}}">
                {!! Form::label('valordesconsolmaritimo', 'Valor da Desconsolidação Marítima: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('valordesconsolmaritimo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valordesconsolmaritimo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('valordesconsolaereo') ? 'has-error' : ''}}">
                {!! Form::label('valordesconsolaereo', 'Valor da desconsolidação Aérea: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('valordesconsolaereo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('valordesconsolaereo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('gerente') ? 'has-error' : ''}}">
                {!! Form::label('gerente', 'Gerente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('gerente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('gerente', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('custo') ? 'has-error' : ''}}">
                {!! Form::label('custo', 'Custo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('custo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('custo', '<p class="help-block">:message</p>') !!}
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