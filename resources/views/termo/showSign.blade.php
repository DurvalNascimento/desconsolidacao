@extends('layouts.master')

@section('content')

    <h1>Termo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> 
                    <th>Name</th>
                    <th>Cliente Id</th>
                    <th>Token</th>
                    <th>Sign</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $termo->id }} </td> 
                    <td> {{ $termo->name }} </td>
                    <td> {{ $termo->cliente_id }} </td>
                    <td> {{ $termo->token }} </td>
                    <td> {{ $termo->sign }} </td>
                </tr>
            </tbody>     
        </table>
    </div>
    <div>

        <iframe class="panel-body col-sm-12" src="http://172.16.0.12:8000/{{ $link }}" style="border: none; height:800;"></iframe>
    </div>

@endsection