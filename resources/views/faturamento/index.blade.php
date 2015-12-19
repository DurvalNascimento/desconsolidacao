@extends('layouts.master')

@section('content')

    <h1>Faturamentos <a href="{{ route('faturamento.create') }}" class="btn btn-primary pull-right btn-sm">Add New Faturamento</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>OS</th><th>Documento</th><th>Data</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($faturamentos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/faturamento', $item->id) }}">{{ $item->OS }}</a></td><td>{{ $item->documento }}</td><td>{{ $item->data }}</td>
                    <td>
                        <a href="{{ route('faturamento.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['faturamento.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $faturamentos->render() !!} </div>
    </div>

@endsection
