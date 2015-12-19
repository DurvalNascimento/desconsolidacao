@extends('layouts.layoutagente')

@section('content')

    
    <br>
    <h1>Listagem de Registros </h1>
                            
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($registrosmars as $item)
                {{-- */$x++;/* --}}

           
            
              
            @endforeach

                <td>{{ $item->id }}</td>
                <td>{{ $x }}</td>
                </br>

      

@endsection