@extends("layouts.dash")
@section("dash-title","Registros")
@section("dash-content")
    <table class="table table-bordered" style="background:#fff;text-align: center">
        <tr>
            <td>#</td>
            <td>Titulo</td>
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
@endsection

