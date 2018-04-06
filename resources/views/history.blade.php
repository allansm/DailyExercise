@extends("layouts.dash")
@section("dash-title","Registros")
@section("dash-content")
<div class="row table-responsive ">
    <table class="table  table-dark table-striped " style="text-align: center;">
        <tr>
            <td>#</td>
            <td>Exercicio</td>
            <td>Contagem</td>
            <td>Dias</td>
            <td>Deletar</td>
        </tr>
        @foreach(Auth()->user()->account->exercise->all() as $exercise)
        <tr>
            <td>{{$exercise->id}}</td>
            <td>{{$exercise->title}}</td>
            <td>{{($exercise->type == "count")?"Repetição":"Tempo"}}</td>
            <td>
                @foreach(explode(";",$exercise->days) as $day)
                    {{$day." "}}
                @endforeach
            </td>
            <td ><a href="{{route("dashboard.deletar.exercicio")}}?q={{$exercise->id}}" style="color:#e00">x</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

