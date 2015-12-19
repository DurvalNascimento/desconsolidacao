<html>
  <head>
    <meta charset="utf-8">



  </head>
                            


                        <h3>PREVISÃO DE CHEGADA  - ISTO É UM TESTE</h3>
                              
                                 <table border='1' class="table table-bordered table-condensed table-hover" style="font-size: 0.9em;">


                                                        <thead>
                                                            <tr>
                                                              <th>PORTO DE ORIGEM</th><th>PORTO DE DESTINO</th><th>PREVISÃO DE ATRACAÇÃO</th><th>NÚMERO DO MBL</th>
                                                              <th>Navio</th><th>AGENTE DE CARGA</th>
                                                            </tr>
                                                        </thead>   
   
                                                        <tbody>
                                                        
                                                     
                                                        @foreach($prevchegada as $item)
                                                       
                                                           
                                                        <tr>
                                                            
                                                            <td><a>{{ $item->POL}}</a></td>
                                                            <td><a>{{ $item->POD}}</a></td>
                                                            <td><a>{{ $item->ETA}}</a></td>
                                                            <td><a>{{ $item->NMbl }}</a></td>
                                                            <td><a>{{ $item->navio}}</a></td>
                                                            <td><a>{{ $item->cnee}}</a></td>
                                                            
                                                                         
                                                        
                                                        </tr>
                                                        @endforeach
                                                         
                                                     

                                                        </tbody>
                                       </table>


    
        



</html>