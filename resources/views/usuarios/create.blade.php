@extends('layouts.master')

@section('content')

    <h3>Adicionar Usuário</h3>
    <hr/>
    <br/>

    {!! Form::open(['route' => 'usuarios.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nome: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'E-mail: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nivelAcess') ? 'has-error' : ''}}">
                {!! Form::label('nivelAccess', 'Nivel de Acesso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('nivelAccess', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nivelAcess', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('empresa', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
                  <div class="col-sm-6">
                      <select class="form-control" name="empresa" id="empresa">
                           @foreach($clientesagente as $cliente)
                                    <option value="{{ $cliente->nome }}">{!! $cliente->nome !!}</option>
                           @endforeach
                         </select>
                        </div>
            </div>
            <div class="form-group {{ $errors->has('ativo') ? 'has-error' : ''}}">
                {!! Form::label('ativo', 'Ativo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('ativo', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('ativo', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('ativo', '<p class="help-block">:message</p>') !!}
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