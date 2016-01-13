@extends('layouts.layoutagente')

@section('content')

        <div class="panel-body">

            <h2>Enviar Pré-alerta</h2>
            <p>Favor informar o número do MBL antes de selecionar os arquivos.</p>
            
            <div class="text-content">
              <div class="span7 offset1">
              @if(Session::has('success'))
                <div class="alert-box success">
                  <h2>{!! Session::get('success') !!}</h2>
                </div>
              @endif
              <div class="secure">Upload form - POR FAVOR CERTIFIQUE-SE QUE O NÚMERO DO MBL ESTÁ CORRETO.</div>
              {!! Form::open(array('url'=>'multiple_upload','method'=>'POST', 'files'=>true)) !!}

           
                              
                <div class="form-group">
                  <label>MBL:</label>
                  <input type="text" required="required" class="form-control" id="referencia" name="referencia" value="" >
                </div>

                <div class="form-group">
                  <label>HBL:</label>
                  <input type="text" required="required" class="form-control" id="hbl" name="hbl" value="" >
                </div>

                <div class="form-group">
                  <label>Armador:</label>
                  <input type="text" required="required" class="form-control" id="armador" name="armador" value="" >
                </div>

                <div class="control-group">
                    <div class="controls">

                    <input type="hidden" id="user_id" name="user_id" value="{!! $user->id !!}">


                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Selecionar MBL</span>
                            <!-- The file input field used as target for the file upload widget -->
                            <!--input id="fileupload" type="file" name="documento"-->
                            <input id="mblupload" multiple="1" name="docs[]" type="file">
                        </span>


                        <!-- The global progress bar -->
                        <div id="mblprogress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>





                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Selecionar HBL</span>
                            <!-- The file input field used as target for the file upload widget -->
                            <!--input id="fileupload" type="file" name="documento"-->
                            <input id="hblupload" multiple="1" name="docs[]" type="file">
                        </span>


                        <!-- The global progress bar -->
                        <div id="hblprogress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>





                        <p class="errors">{!!$errors->first('docs')!!}</p>
                        @if(Session::has('error'))
                        <p class="errors">{!! Session::get('error') !!}</p>
                        @endif


                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {!! Session::get('success') !!}
                            </div>
                        @endif


                    </div>
                </div>
            {!! Form::submit('Enviar', array('class'=>'send-btn btn btn-primary')) !!}
            {!! Form::close() !!}
            </div>
            




            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Arquivo</th>
                        <th>Enviado em</th>
                        <th>Usuário</th>
                        <th>Agente</th>
                        <th>Status</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->files as $file)

                        <tr>
                        <td>{!! $file->name !!}</td>
                        <td>{!! $file->created_at !!}</td>
                        <td>{!! $user->name !!}</td>
                        <td>{{ Auth::user()->empresa }}</td>
                        <td>{!! $file->status !!}</td>


                     <!--   <td>
                            <a href="{!! route('files.download', [$user->id, $file->id]) !!}" class="btn btn-xs btn-success">download</a>
                            <a href="{!! route('files.destroy', [$user->id, $file->id]) !!}" class="btn btn-xs btn-danger">excluir</a>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>                

@endsection

