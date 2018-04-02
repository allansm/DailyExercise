@extends("layouts.dash")
@section("dash-title","Registros")
@section("dash-content")
    <table class="table table-bordered" style="background:#fff;text-align: center">
        <tr>
            <td>#</td>
            <td>titulo</td>
            <td>contagem</td>
            <td>dias</td>
            <td>deletar</td>
        </tr>
        @foreach(Auth()->user()->account->exercise->all() as $exercise)
        <tr>
            <td>{{$exercise->id}}</td>
            <td>{{$exercise->title}}</td>
            <td>{{($exercise->type == "count")?"repetição":"tempo"}}</td>
            <td>
                @foreach(explode(";",$exercise->days) as $day)
                    {{$day." "}}
                @endforeach
            </td>
            <td ><a href="" style="color:#e00">x</a></td>
        </tr>
        @endforeach
    </table>
@endsection

