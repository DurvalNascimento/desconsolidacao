@extends('layouts.layoutagente')

@section('content')
  

  <br/>

    <h1>
     Pendentes de Fatumento
    </h1>  
    
  


 <div class="container">
                      

                      
                      
                      <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Marítimos</a></li>
                      <li><a data-toggle="tab" href="#menu1">Aéreos</a></li>
                      </ul>
                 
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                        <h3></h3>

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
                              
                               <table id='dtable' class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">
                                      <thead>
                                            <tr>
                                               <th>Agente</th><th>Cnee</th><th>Atracado</th><th>MBL</th><th>HBL</th><th>Faturado</th>
                                            </tr>
                                      </thead> 
                                        <tfoot>
                                            <tr>
                                               <th>Agente</th><th>Cnee</th><th>MBL</th><th>HBL</th><th>Chegada</th><th>Faturado</th>
                                            </tr>
                                      </tfoot> 


                                      <tbody>
                                                                         
                                        @foreach($maritimos as $item)
                                         
                                           
                                        <tr>
                                            <td><a>{{ $item->agente }}</a></td>
                                            <td><a>{{ $item->cnee }}</a></td>
                                            <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>
                                            <td><a>{{ $item->NMbl }}</a></td>
                                            <td><a>{{ $item->NHbl }}</a></td>
                                        
                                            <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?> 
                                            <td><a><?php echo $a ?> </a></td>
                                                                                    
                                            
                                        </tr>   
                                        @endforeach
                                         
                                    </tbody>   

                                </table>
                        </div>   
                      
                           
                          <div id="menu1" class="tab-pane fade">
                           <h3></h3>
                              <table id='example1' class="table  table-bordered table-condensed table-hover" style="font-size: 0.9em;">

                                                        <thead>
                                            <tr>
                                               <th>Agente</th><th>MAWB</th><th>HAWB</th><th>Chegada</th><th>Faturado</th><th>Destino</th>
                                            </tr>
                                        </thead> 


                                                                           
                                        <tbody>
                                    
                                     
                                        @foreach($registrosar as $item)
                                         
                                           
                                        <tr>
                                            
                                            
                                            <td><a>{{ $item->agente }}</a></td>
                                            <td><a>{{ $item->NMawb }}</a></td>
                                            <td><a>{{ $item->NHawb }}</a></td>
                                            <td><a><?php echo date('d/m/Y', strtotime($item->datachegada)); ?></a></td>                
                                            <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?> 
                                            <td><a><?php echo $a ?> </a></td>
                                            <td><a>{{ $item->destino }}</a></td>
                                                          
                                            
                                        </tr>   
                                 
                                        

                                        @endforeach
                                         
                                        </tbody>
                                    </table>
                           </div>
             
                  
        </div>


@endsection