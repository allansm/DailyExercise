@extends("layouts.dash")
@section("dash-title","Historico diario")
@section("dash-content")
<div class="row ">
    Hoje :&nbsp;<div style="background:#007bff;height:20px;width:20px"></div><br/><br/>
    <table class="table table-dark table-bordered" style="text-align: center;">
        <tr>
            <td>#</td>
            <td>Titulo</td>
            <td>Contagem</td>
            <td>Intensidade</td>
            <td>Data/Hora</td>
            <td>Deletar</td>
        </tr>
        @foreach(Auth()->user()->account->exercise->all() as $exercise)
            @foreach($exercise->historic->all() as $historic)
                <tr style="color: {{(explode(" ",$historic->created_at)[0] == date("Y-m-d"))?"#007bff;":"#eee" }}">
                    <td>{{$historic->id}}</td>
                    <td>{{$exercise->title}}</td>
                    <td>{{($exercise->type == "count")?"Repetição":"Tempo"}}</td>
                    <td>{{$historic->intensity}}</td>
                    <td>{{$historic->created_at}}</td>
                    <td><a href="{{route("dashboard.deletar.historico")}}?q={{$historic->id}}" style="color:#f00">x</a></td>
                </tr>
            @endforeach
        @endforeach
    </table>
</div>
@endsection
