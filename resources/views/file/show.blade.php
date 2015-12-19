@extends('layouts.master')

@section('content')

    <h1>File</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>User Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $file->id }}</td> <td> {{ $file->name }} </td><td> {{ $file->User_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection