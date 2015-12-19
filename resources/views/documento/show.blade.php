@extends('layouts.master')

@section('content')

    <h1>Documento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Tipo</th><th>Numero</th><th>Vias</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $documento->id }}</td> <td> {{ $documento->tipo }} </td><td> {{ $documento->numero }} </td><td> {{ $documento->vias }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection