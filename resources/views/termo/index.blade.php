@extends('layouts.master')

@section('content')

<br/>

    <h1>Enviar Termo de Container <a href="{{ url('/termo/create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Termo</a></h1>
   
    <br/>
    <div class="table">
        <table id='example' class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name do arquivo</th><th>HBL</th><th>Cliente</th><th>Token</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            
            @foreach($termos as $item)
              
                <tr>
                   
                    <td><a href="{{ url('/termo', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->hbls->NHbl }}</td><td>{{ $item->hbls->cnee }}</td><td>{{ $item->token }}</td>
                    <td><a href="{{ url('/termo/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['termoController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection