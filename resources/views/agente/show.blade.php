@extends('layouts.master')

@section('content')

    <h1>Agente</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Cnpj</th><th>Endereco</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $agente->id }}</td> <td> {{ $agente->nome }} </td><td> {{ $agente->cnpj }} </td><td> {{ $agente->endereco }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection