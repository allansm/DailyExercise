@extends("layouts.dash")
@section("dash-title","Historico diario")
@section("dash-content")
<div class="row ">
    hoje :&nbsp;<div style="background:#595;height:20px;width:20px"></div><br/><br/>
    <table class="table table-bordered" style="background:#fff;text-align: center">
        <tr>
            <td>#</td>
            <td>Titulo</td>
            <td>Contagem</td>
            <td>Intensidade</td>
            <td>Data/Hora</td>
        </tr>
        @foreach(Auth()->user()->account->exercise->all() as $exercise)
            @foreach($exercise->historic->all() as $historic)
                <tr style="background: {{(explode(" ",$historic->created_at)[0] == date("Y-m-d"))?"#595;color:#eee":"#eee" }}">
                    <td>{{$historic->id}}</td>
                    <td>{{$exercise->title}}</td>
                    <td>{{($exercise->type == "count")?"Repetição":"Tempo"}}</td>
                    <td>{{$historic->intensity}}</td>
                    <td>{{$historic->created_at}}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
</div>
@endsection
