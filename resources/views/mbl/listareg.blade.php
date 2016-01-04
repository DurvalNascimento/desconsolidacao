@extends('layouts.layoutagente')


@section('content')
  

  <br/>

    <h3>
       PROCESSOS
        

       <!-- <a href="{{ url('/hbl/create') }}" class="btn btn-primary pull-right btn-sm">  
            Adicionar HBL
        </a>
         <a href="{{ url('/mbl/create') }}" class="btn btn-primary pull-right btn-sm">  
            Adicionar MBL
        </a> -->


    </h3>  
    
  


 <div class="container">
                      

                      
                      
                      <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Ativos</a></li>
                      <li><a data-toggle="tab" href="#menu1">Finalizados</a></li>
                      <li><a data-toggle="tab" href="#menu2">Previsão de Chegada</a></li>
                      <li><a data-toggle="tab" href="#menu3">Todos</a></li></ul>
     <br/>
     <br/>
                 
                       <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                          <br/>
                        <h3></h3>


                      
                                
                                    <table id="example" class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
                                                     <thead>
                                                          <tr>
                                                             <th>Registro</th>
                                                             <th>Agente</th>
                                                             <th>ETA</th>
                                                             <th>MBL</th>
                                                             <th>Destino</th>
                                                             <th>Pré-alerta</th>
                                                            
                                                          </tr>
                                                      </thead>

                                                      <tbody>
                                                       @foreach($mblsativos as $item)
                
                                                            <tr>
                                                                <td>
                                                                <a href="{{ url('/maritimo', $item->id) }}">{{ $item->registro }}</a></td>
                                                                <td>{{ $item->cnee }}</td>
                                                                <td>{{ $item->ETA }}</td>
                                                                <td>{{ $item->NMbl }}</td>
                                                                <td>{{ $item->POD }}</td>
                                                                <?php if ($item->prealerta == '0') {$a = 'Não recebido';} else {$a = 'Recebido';} ?> 
                                                                <td><a><?php echo $a ?> </a></td>


                                                                 
                                                                    



                                                                             
                                                           <!--     <td>
                                                                    <a href="{{ url('/mbl/'.$item->id.'/edit') }}">
                                                                        <button type="submit" class="btn btn-primary btn-xs">
                                                                            Editar
                                                                        </button>
                                                                        
                                                                    </a> 
                                                                        / {!! Form::open(['method'=>'delete','action'=>['MblController@destroy',$item->id], 'style' => 'display:inline']) !!}
                                                                    <button type="submit" class="btn btn-danger btn-xs">
                                                                        Não Recebido
                                                                    </button>
                                                                        {!! Form::close() !!}
                                                                </td>
                                                            </tr> -->
                                                        @endforeach
                                                        </tbody>         

                                       </table>
                                </div>   

                           
                          <div id="menu1" class="tab-pane fade">
                      
     <br/>                   <br/>
                          
                              
                                    <table id='example1' class="table  table-bordered table-condensed table-hover" style="font-size: 0.9em;">


                                                      <thead>
                                                          <tr>
                                                            <th>Registro</th>
                                                             <th>Agente</th>
                                                             <th>Atracado</th>
                                                             <th>MBL</th>
                                                             <th>Destino</th>
                                                         
                                                          </tr>
                                                      </thead>

                                                             <tbody>
                                                       @foreach($mblsfinalizados as $item)
                
                                                            <tr>
                                                                <td>
                                                                <a href="{{ url('/maritimo', $item->id) }}">{{ $item->registro }}</a></td>
                                                                <td>{{ $item->cnee }}</td>
                                                                <td>{{ $item->atracado }}</td>
                                                                <td>{{ $item->NMbl }}</td>
                                                                <td>{{ $item->POD }}</td>
                                                             
                                                                             
                                                             <!--   <td>
                                                                    <a href="{{ url('/mbl/'.$item->id.'/edit') }}">
                                                                        <button type="submit" class="btn btn-primary btn-xs">
                                                                            Editar
                                                                        </button>
                                                                        
                                                                    </a> 
                                                                        / {!! Form::open(['method'=>'delete','action'=>['MblController@destroy',$item->id], 'style' => 'display:inline']) !!}
                                                                    <button type="submit" class="btn btn-danger btn-xs">
                                                                        Deletar
                                                                    </button>
                                                                        {!! Form::close() !!}
                                                                </td>
                                                            </tr> -->
                                                        @endforeach
                                                        </tbody> 
                                       </table>
                                </div>



                          <div id="menu2" class="tab-pane fade">

     <br/>
     <br/>
                                    <table id='example2' class="table  table-bordered table-condensed table-hover" style="font-size: 0.9em;">


                                                        <thead>
                                                            <tr>
                                                               <th>Registro</th><th>Destino</th><th>Prev.Chegada</th><th>MBL</th><th>Navio</th><th>Agente</th>
                                                            </tr>
                                                        </thead>   
   
                                                        <tbody>
                                                        
                                                     
                                                        @foreach($prevchegada as $item)
                                                       
                                                           
                                                        <tr>
                                                            
                                                            <td><a>{{ $item->registro}}</a></td>
                                                            <td><a>{{ $item->POD}}</a></td>
                                                            <td><a>{{ $item->ETA}}</a></td>
                                                            <td><a>{{ $item->NMbl }}</a></td>
                                                            <td><a>{{ $item->navio}}</a></td>
                                                            <td><a>{{ $item->cnee}}</a></td>
                                                            
                                                                         
                                                        
                                                        </tr>
                                                        @endforeach
                                                         
                                                     

                                                        </tbody>
                                       </table>
                                </div>

                                <div id="menu3" class="tab-pane fade">
                              

                                   <div class="col-sm-12">  
                                      <div class="col-sm-2">
                                        <div>
                                            <i class="fa fa-calendar"></i>
                                            Data inicial:<input class="form-control" id="min" name="min" value="01/01/2015">
                                              </div>
                                              </div>
                                              <div class="col-sm-2">
                                            <div>
                                            <i class="fa fa-calendar"></i>
                                            Data final:<input class="form-control" id="max" name="max" value="30/06/2016">
                                        </div>
                                      </div>
                                </div>
                                
                                    <table id='dtable' class="table  table-bordered table-condensed table-hover" style="font-size: 0.7em;">

                                                        <thead>
                                                            <tr>
                                                                <th>Agente</th><th>MBL</th><th>ETA</th><th>HBL</th><th>Cnee</th><th>Origem</th><th>Destino</th>
                                                            </tr>
                                                        </thead>

                                                        <tfoot>
                                                            <tr>
                                                                <th>Agente</th><th>MBL</th><th>ETA</th><th>HBL</th><th>Cnee</th><th>Origem</th><th>Destino</th>
                                                            </tr>
                                                        </tfoot>
                                                        
                                                        <tbody>
                                                       
                                                        @foreach($hbls as $item)
                                                           
                                                            <tr>
                                                          
                                                                <td>{{ $item->mbls->cnee }}</td><td>{{ $item->NMbl }}</td>
                                                                <td><?php echo date('d/m/Y', strtotime($item->mbls->ETA)); ?></td>
                                                                <td>{{ $item->NHbl }}</td><td>{{ $item->cnee }}</td><td>{{ $item->mbls->POL }}</td>
                                                                <td>{{ $item->mbls->POD }}</td>
                                                              
                                                                    
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                       </table>
                                </div>


                  
                      
                     </div>
                  
        </div>


@endsection