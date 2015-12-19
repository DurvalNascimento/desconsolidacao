@extends('layouts.master')

@section('content')

    <h1>Clientes <a href="{{ route('cliente.create') }}" class="btn btn-primary pull-right btn-sm">Add New Cliente</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Nome</th><th>Cnpj</th><th>Endereco</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($clientes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/cliente', $item->id) }}">{{ $item->nome }}</a></td><td>{{ $item->cnpj }}</td><td>{{ $item->endereco }}</td>
                    <td>
                        <a href="{{ route('cliente.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['cliente.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $clientes->render() !!} </div>
    </div>

@endsection
