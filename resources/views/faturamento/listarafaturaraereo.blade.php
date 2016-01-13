<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        

    <title>Desonsol HdTrans</title>
           
    </head>    
    
    </br>

   
    <body>

    <h3>Registros para Faturamento AÉREO <?php   echo $data = date("d/m/Y");?></h3>
 </br>

    <h4>Taxa a ser utilizada Ptax do dia que for emitida a Nota Fiscal</h4>
      
    
  

      <table border="1" style="width:100%">
              

            <thead>
                <tr>
                   <th>Agente</th><th>MAWB</th><th>HAWB</th><th>Chegada</th><th>Faturado</th><th>Destino</th><th>Delivery</th>
                </tr>
            </thead> 


                                               
            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($registros as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->agente }}</a></td>
                <td><a>{{ $item->NMawb }}</a></td>
                <td><a>{{ $item->NHawb }}</a></td>
                <td><a><?php echo date('d/m/Y', strtotime($item->datachegada)); ?></a></td>                
                <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?> 
                <td><a><?php echo $a ?> </a></td>
                <td><a>{{ $item->destino }}</a></td>
                <td><a>{{ $item->vlrDelivery }}</a></td>
                              
                
            </tr>   
     
            

            @endforeach
             
            </tbody>
        </table>
    </br>

  <h4>Favor confirmar os dados acima para emitirmos a NF</h4>
  </br>

  <?php $vlr = $x * $item->vlrDesconsol; 
  echo "Valor Total em USD ";
  echo $vlr;
  ?>

<div class="footer-col col-md-4">  
<p>Dados Bancarios:
Banco Bradesco
Agencia: 0426-0
Conta Corrente: 138374-4
CNPJ: 02.637.242/0001-16
HdTrans Transportes de Cargas </p>
</div>      
    </br>
    </br>

        
            
    </div>

        
         </div>
</html>
        
