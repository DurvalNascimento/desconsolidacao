@extends('layouts.master')

@section('content')

    <h1>Usuario</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nome</th><th>Email</th><th>Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $usuario->id }}</td> <td> {{ $usuario->nome }} </td><td> {{ $usuario->email }} </td><td> {{ $usuario->password }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection