@extends('layouts.master')

@section('content')

    <h1>Mbl</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Registro</th><th>NMbl</th><th>Cnee</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $mbl->id }}</td> <td> {{ $mbl->registro }} </td><td> {{ $mbl->NMbl }} </td><td> {{ $mbl->cnee }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection