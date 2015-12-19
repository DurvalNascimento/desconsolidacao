@extends('layouts.master')

@section('content')

<br/>

    <h1>Agentes: <a href="{{ route('agente.create') }}" class="btn btn-primary pull-right btn-sm">Adicionar novo Agente</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nome</th><th>Cnpj</th><th>Endereco</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($agentes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/agente', $item->id) }}">{{ $item->nome }}</a></td><td>{{ $item->cnpj }}</td><td>{{ $item->endereco }}</td>
                    <td>
                        <a href="{{ route('agente.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Editar</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['agente.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $agentes->render() !!} </div>
    </div>

@endsection
