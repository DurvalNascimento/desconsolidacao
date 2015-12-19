@extends('layouts.master')

@section('content')

    <h1>Aereo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Registro</th><th>Referencia</th><th>Agente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $aereo->id }}</td> <td> {{ $aereo->registro }} </td><td> {{ $aereo->referencia }} </td><td> {{ $aereo->agente }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection