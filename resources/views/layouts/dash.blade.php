@extends("layouts.app")

@section("head")
<link rel="stylesheet" href="{{asset("css/dash.css")}}">
@endsection
@section("content")
<div class="row">
    <div class="col-lg-2 col-md-12 dash">
        <div class="dash-item  row">
            <a href="{{route("home")}}" class=" col-sm-4 col-lg-12 dash-active transaction-1"><b>DailyExercise/{{Auth()->user()->login}}</b></a>
            <a href="{{route("cadastro.exercicio")}}" class="col-sm-2 col-lg-12 transaction-1">Adicionar Exercicio</a>
            <a href="{{route("dashboard.registros.exercicio")}}" class="col-sm-2 col-lg-12 transaction-1">Historico Diario</a>
            <a href="{{route("dashboard.registros")}}" class="col-sm-2 col-lg-12 transaction-1">Registros</a>
            <a href="{{route("logout")}}" class="col-sm-2 col-lg-12 transaction-1">Logout</a>
        </div>
    </div>
    <div class="col-lg-10 col-md-12  conteudo " style="padding:30px">
        <h2>@yield("dash-title")</h2>
        <hr style="background:#333">
        <div class="col-lg-12">
            @yield("dash-content")
        </div>
    </div>
</div>
@endsection
