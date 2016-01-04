@extends('layouts.layoutagente')

@section('content')

<br/>

    <h3>Termo de Container <a href="{{ url('/termo/create') }}" class="btn btn-primary pull-right btn-sm">Adicionar Termo</a></h3>
   
    <br/>
    <div class="table">
        <table id='example' class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name do arquivo</th><th>HBL</th><th>Cliente</th><th>Token</th>
                </tr>
            </thead>                
            <tbody>
            
            @foreach($termos as $item)
              
                <tr>
                   
                    <td><a href="{{ url('/termo', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->hbls->NHbl }}</td><td>{{ $item->hbls->cnee }}</td><td>{{ $item->token }}</td>
                    <td>{!! Form::open(['method'=>'delete','action'=>['termoController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Deletar</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection