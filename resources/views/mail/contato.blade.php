@extends('layouts.layoutimportador')

@section('content')
<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading"><h3 class="panel-title">Formulário de contato</h3></div>
             <div class="panel-body">
               {!! Form::open(['route' => 'mail.store', 'method' => 'post']) !!}

                 <div class="form-group">
                     {!! Form::label('name', 'Nome') !!}
                     {!! Form::text('name', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('email', 'E-Mail') !!}
                     {!! Form::email('email', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('fone', 'Fone') !!}
                     {!! Form::text('fone', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::label('body', 'Mensagem') !!}
                     {!! Form::textarea('body', null, ['class' => 'form-control' ]) !!}
                 </div>
                 <div class="form-group">
                     {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                 </div>
               {!! Form::close() !!}
             </div>
           </div>
        </div>
   </div>
</div>
@endsection

