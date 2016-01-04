@extends('layouts.master')

@section('content')

    <h3>Editar Usuário</h3>
    <hr/>
    <br/>

    {!! Form::model($usuario, [
        'method' => 'PATCH',
        'route' => ['usuarios.update', $usuario->id],
        'class' => 'form-horizontal'
    ]) !!}

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
            <div class="form-group {{ $errors->has('nivelAcess') ? 'has-error' : ''}}">
                {!! Form::label('nivelAccess', 'Nivel de Acesso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('nivelAccess', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nivelAccess', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('empresa') ? 'has-error' : ''}}">
                {!! Form::label('empresa', 'Empresa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('empresa', '<p class="help-block">:message</p>') !!}
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
            {!! Form::submit('Alterar', ['class' => 'btn btn-primary form-control']) !!}
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