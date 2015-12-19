@extends('layouts.layoutagente')

@section('content')

    <p>
        <div class="col-sm-2">
            Data Inicio:<input class="form-control" id="min" name="min" type="date" value="2015-01-01" id="dataChegada">
            Data Fim:<input class="form-control" id="max" name="max" type="date" value="2015-12-31" id="dataChegada">
        </div>
    </p>
    <br>
    <h1>Faturamento </h1>
    <div class="table">
        <table  id="dtable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                   <th>Agente</th><th>MBL</th><th>Chegada</th><th>Valor</th><th>Taxa USD </th><th>Faturado</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
         
            @foreach($maritimos as $item)
                {{-- */$x++;/* --}}
               
            <tr>
                
                
                <td><a>{{ $item->agente }}</a></td>
                <td><a>{{ $item->NMbl }}</a></td>
                <td><a>{{ $item->dataAtrac }}</a></td>
                <td><a>{{ $item->vlrDesconsol}}</a></td>
                <td><a>{{ $item->taxaUsd}}</a></td>
                <?php if ($item->faturado == '0') {$a = 'Não';} else {$a = 'sim';} ?>
                <td><a><?php echo $a ?> </a></td>
                
             </tr>   
     
           
            @endforeach
             
         

            </tbody>
        </table>

         </div>

@endsection