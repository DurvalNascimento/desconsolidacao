@extends('layouts.master')

@section('content')

    <h1>Notafiscal</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Numero</th><th>Data</th><th>TaxaUsd</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $notafiscal->id }}</td> <td> {{ $notafiscal->numero }} </td><td> {{ $notafiscal->data }} </td><td> {{ $notafiscal->taxaUsd }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection