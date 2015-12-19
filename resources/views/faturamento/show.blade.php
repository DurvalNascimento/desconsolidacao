@extends('layouts.master')

@section('content')

    <h1>Faturamento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>OS</th><th>Documento</th><th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $faturamento->id }}</td> <td> {{ $faturamento->OS }} </td><td> {{ $faturamento->documento }} </td><td> {{ $faturamento->data }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection