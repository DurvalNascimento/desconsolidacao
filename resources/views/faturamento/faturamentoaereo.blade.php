@extends('layouts.master')

@section('content')

    <br>
    <h1>Faturamento Aéreo </h1>
      
    </br>
    </br>
    </br>
         

            </tbody>
        </table>

        {!! Form::open(['url' => 'faturaraereo', 'class' => 'form-horizontal']) !!}
    


                    

                </br>
                </br>
                </br>

            <div class="form-group">
                {!! Form::label('agente', 'Agente: ', ['class' => 'col-sm-3 control-label']) !!}
               
                <div class="col-sm-6">
                    <select class="form-control" name="cliente_id" id="cliente_id">
                        @foreach($clientesagente as $cliente)
                            <option value="{{ $cliente->nome }}">{!! $cliente->nome !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>

             </br>
                </br>
                </br>

                    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Faturar', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        
         </div>

@endsection