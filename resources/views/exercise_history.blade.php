@extends("layouts.dash")
@section("dash-title","Historico diario")
@section("dash-content")
<div class="row ">
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
                <tr>
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
