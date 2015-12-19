@extends('layouts.master')

@section('content')

    <h1>Cliente</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Cnpj</th><th>Endereco</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cliente->id }}</td> <td> {{ $cliente->nome }} </td><td> {{ $cliente->cnpj }} </td><td> {{ $cliente->endereco }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection