@extends('layouts.master')

@section('content')

    <div class="panel-body col-sm-10">

        <h3>Enviar Termo de container</h3>
        <p>Favor informar o número de HBL antes de enviar o termo</p>
            
        <div class="text-content">
            <div class="span7 offset1">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>{!! Session::get('success') !!}</h2>
                </div>
            @endif
            
                
                <div class="secure">Upload form</div>
                {!! Form::open(array('url'=>'termo/upload','method'=>'POST', 'files'=>true)) !!}
                
                <div class="form-group">
                        {!! Form::label('hbl-NHbl', 'HBL: ', ['class' => 'col-sm-1 control-label']) !!}
                        <div class="col-sm-9">
                            <select class="form-control" name="hbl_id" id="hbl_id">
                                @foreach($hbls as $hbl)
                                    <option value="{{ $hbl->id }}">{!! $hbl->NHbl !!}</option>
                                @endforeach
                            </select>
                        </div>           
                </div> 
                
                <div class="control-group">
                    <div class="controls">

                    <!--input type="hidden" id="user_id" name="user_id" value="id"-->
                        <br/>
                        <br/>

                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>Adicionar termo</span>
                            <!-- The file input field used as target for the file upload widget -->
                            <!--input id="fileupload" type="file" name="documento"-->
                            <input id="termoupload" name="termo" type="file">
                        </span>


                        <!-- The global progress bar -->
                        <div id="termoprogress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>


            
                        <p class="errors">{!!$errors->first('termo')!!}</p>
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
            </div>
            {!! Form::submit('Enviar', array('class'=>'send-btn btn btn-primary')) !!}
            {!! Form::close() !!}
            </div>
        </div>                

@endsection