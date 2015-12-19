@extends('layouts.master')

@section('content')

    <h1>Hbl</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>NHbl</th><th>NMbl</th><th>CeHbl</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $hbl->id }}</td> <td> {{ $hbl->NHbl }} </td><td> {{ $hbl->NMbl }} </td><td> {{ $hbl->ceHbl }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection