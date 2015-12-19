@extends('layouts.layoutagente')

@section('content')
</br>

    <h1>Inserir FreeTime</h1>
    <hr/>

    {!! Form::model($maritimos, ['method' => 'PATCH', 'action' => ['maritimoController@update', $maritimos->id], 'class' => 'form-horizontal']) !!}

                

                    

                    <div class="form-group">
                        {!! Form::label('freetimeMbl', 'FreeTimeMBL: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::number('freetimeMbl', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('freetimeHbl', 'FreetimeHBL: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::number('freetimeHbl', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                 
                    
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
       {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-primary form-control']) !!}
     
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection