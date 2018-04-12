@extends("layouts.dash")
@section("dash-title","Estatistica")
@section("dash-content")
<div class="row">
    <div class="col-md-12 table-responsive">
    <table class="table  table-dark table-striped statistics" style="text-align: center;">
        <tr>
            <td>Exercicio</td>
            <td>Tipo</td>
            <td>Total Executado</td>
            <td>Maior Valor</td>
            <td>Valor Total</td>
            <td>Media</td>
        </tr>
        @foreach($mat as $exercise)
        <tr>
            <td>{{$exercise["name"]}}</td>
            <td>{{($exercise["type"] == "count")?"Repetição":"Tempo"}}</td>
            <td>{{$exercise["times"]}}</td>
            <td>{{$exercise["maxValue"]}}&nbsp;{{($exercise["type"] == "count")?"Repetições":"Minutos"}}</td>
            <td>{{$exercise["totalValue"]}}&nbsp;{{($exercise["type"] == "count")?"Repetições":"Minutos"}}</td>
            <td>{{number_format($exercise["totalValue"]/$exercise["times"],2)}}&nbsp;{{($exercise["type"] == "count")?"Repetições":"Minutos"}}</td>
        </tr>
        @endforeach
    </table>
    </div>
    @foreach($mat as $exercise)
        <div class="col-lg-4 col-md-6 mobile-statistics"  style="padding:10px ;">
            <div class="col-md-12 tile tile-register transaction-1" style="background:#333;height:auto;display:inline-block">
                <div class="col-md-12" style="text-align:center;padding:10px;"><h4>{{$exercise["name"]}}</h4></div>
                <div style="text-align: center;">
                    <h3>Media<br/>{{number_format($exercise["totalValue"]/$exercise["times"],2)}}<br/>{{($exercise["type"] == "count")?"Repetições":"Minutos"}}</h3>
                    <br/>
                    <h6>Maior Valor:&nbsp;{{$exercise["maxValue"]}}&nbsp;{{($exercise["type"] == "count")?"Repetições":"Minutos"}}<br/>Total:&nbsp;{{$exercise["totalValue"]}}&nbsp;{{($exercise["type"] == "count")?"Repetições":"Minutos"}}<br/><br/></h6>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
