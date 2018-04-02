@extends("layouts.dash")
@section("dash-title","Adicionar Exercicio")
@section("dash-content")
<div class="">
    <form method="post" action="{{route("dashboard.registrar.exercicio")}}" class="col-md-12 row">
        {!! csrf_field() !!}
        <div class="col-md-12" style="padding:10px">
            <input type="text" class="form-control " name="title" placeholder="nome do exercicio"  autofocus="" />
        </div>
        <div class="col-md-8" style="padding:10px">
            <select class="form-control " name="type">
                <option selected hidden>Tipo de Contagem</option>
                <option value="count">Repetição</option>
                <option value="time">Tempo</option>
            </select>   
        </div>
        <div class="col-md-4" style="padding:10px">
            <input type="number" class="form-control " name="times" placeholder="vezes ao dia"  autofocus="" />
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="segunda" class="">&nbsp;segunda
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="terça" class="">&nbsp;terca
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="quarta" class="">&nbsp;quarta
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="quinta" class="">&nbsp;quinta
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="sexta" class="">&nbsp;sexta
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="sabado" class="">&nbsp;sabado
        </div>
        <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
            <input type="checkbox" name="days[]" value="domingo" class="">&nbsp;domingo
        </div>
        <div class="col-md-3 " style="padding:10px">

        </div>

        <div class="col-md-12" style="padding:10px">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Adicionar</button>
        </div>
    </form>
</div>
@endsection

