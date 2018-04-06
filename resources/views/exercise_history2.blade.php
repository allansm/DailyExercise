@extends("layouts.dash")
@section("dash-title","Historico diario")
@section("dash-content")
<div class="row">
    @foreach(Auth()->user()->account->exercise->all() as $exercise)
        @foreach($exercise->historic->all() as $historic)
            <div class="col-lg-4 col-md-6 "  style="padding:10px ;">

                <div class="col-md-12 tile tile-register transaction-1">

                    <div class="col-md-12" style="text-align:center;padding:10px;"><h3>{{$exercise->title}}</h3></div>

                    <div style="text-align: center;">
                    <h2>{{$historic->intensity}}<br/>{{($exercise->type == "count")?"Reps":"Minutos"}}</h2><br/><h4>{{(explode(" ",$historic->created_at)[0] == date("Y-m-d"))?"Hoje":strtoupper($days[date("N",strtotime($historic->created_at))])}}<br/>{{date(" d/m/Y",strtotime($historic->created_at))}}</h4>
                    </div>
                </div>
                <!--
                <td>#</td>
                <td>Exercicio</td>
                <td>Contagem</td>
                <td>Intensidade</td>
                <td>Dia/Data/Hora</td>
                <td>Deletar</td>
                -->
            </div>
        @endforeach
    @endforeach
</div>
@endsection
