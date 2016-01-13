<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        

    <title>Desonsol HdTrans</title>
           
    </head>    
    
    </br>

   
    <body>

    <h3>Registros para Faturamento MARÍTIMO <?php   echo $data = date("d/m/Y");?></h3>
 </br>

    <h4>Taxa a ser utilizada Ptax do dia que for emitida Nota Fiscal</h4>
      
    
  

      <table border="1" style="width:100%">
              

            
                <tr>
                  <th>Item</th><th>Agente</th><th>HBL</th><th>MBL</th><th>Chegada</th><th>Valor</th>
                </tr>
           

                                               
           
            {{-- */$x=0;/* --}}
         
            @foreach($registros as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                <td><a>{{ $x }}</a></td>
                <td><a>{{ $item->mbls->cnee }}</a></td>
                <td><a>{{ $item->NHbl }}</a></td>
                <td><a>{{ $item->NMbl }}</a></td>
                <td><a><?php echo date('d/m/Y', strtotime($item->mbls->atracado)); ?></a></td>
                <td><a>{{ $item->vlrDesconsol }}</a></td>

                
                
                              
                
            </tr>   
     
            

            @endforeach
             
            </body>
        </table>
  
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
     
</html>

