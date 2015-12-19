@extends('layouts.master')

@section('content')

    <h1>Documentos <a href="{{ route('documento.create') }}" class="btn btn-primary pull-right btn-sm">Add New Documento</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Tipo</th><th>Numero</th><th>Vias</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($documentos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/documento', $item->id) }}">{{ $item->tipo }}</a></td><td>{{ $item->numero }}</td><td>{{ $item->vias }}</td>
                    <td>
                        <a href="{{ route('documento.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['documento.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $documentos->render() !!} </div>
    </div>

@endsection
