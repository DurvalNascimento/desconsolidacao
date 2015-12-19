@extends('layouts.layoutagente')

@section('content')

    <p>
        <div class="col-sm-2">
            Data Inicio:<input class="form-control" id="min" name="min" type="date" value="2015-01-01" id="dataChegada">
            Data Fim:<input class="form-control" id="max" name="max" type="date" value="2016-12-31" id="dataChegada">
        </div>
    </p>
    <br>
    <h1>Listagem de Registros </h1>
    <div class="table">
        <table id="dtable" class="table table-bordered table-striped table-hover" style="font-size: 0.9em;">
            <thead>
                <tr>
                   <th>Registro</th><th>Agente</th><th>ETA</th><th>Cnee</th><th>Porto Embarque</th><th>MBL</th><th>HBL</th><th>Destino</th><th>Navio</th><th>Data Chegada</th><th>Ação</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($maritimos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td><a href="{{ url('/maritimo', $item->id) }}">{{ $item->registro }}</a></td><td>{{ $item->agente }}</td><td>{{ $item->ETA }}</td><td>{{ $item->hblcnee }}</td><td>{{ $item->POL }}</td><td>{{ $item->NMbl }}
                    </td><td>{{ $item->NHbl }}</td><td>{{ $item->POD }}</td><td>{{ $item->mainvessel }}</td><td>{{ $item->atracado }}</td>
                    <td><a href="{{ url('/addfreetime/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Freetime</button></a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection