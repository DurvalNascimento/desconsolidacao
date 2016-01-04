@extends('layouts.master')

@section('content')
<br/>

    <h3>Usuários <a href="{{ route('usuarios.create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Usuário</a></h3>
    <div class="table">
        <table id='example' class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nome</th><th>Email</th><th>Agente</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($usuarios as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/usuarios', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->email }}</td><td>{{ $item->empresa }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['usuarios.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $usuarios->render() !!} </div>
    </div>

@endsection
