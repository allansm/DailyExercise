@extends("layouts.dash")
@section("dash-title","Adicionar Exercicio")
@section("dash-content")
<div class="col-md-12 row">
    <div class="col-md-12" style="padding:10px">
        <input type="text" class="form-control " name="login" placeholder="nome do exercicio"  autofocus="" />
    </div>
    <div class="col-md-8" style="padding:10px">
        <select class="form-control ">
            <option selected hidden>Tipo de Contagem</option>
            <option>repeticao</option>
            <option>tempo</option>
        </select>   
    </div>
    <div class="col-md-4" style="padding:10px">
        <input type="number" class="form-control " name="login" placeholder="vezes ao dia"  autofocus="" />
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;segunda
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;terca
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;quarta
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;quinta
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;sexta
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;sabado
    </div>
    <div class="col-md-3 col-sm-4 checkbox" style="padding:10px">
        <input type="checkbox" value="segunda" class="">&nbsp;domingo
    </div>
    <div class="col-md-3 " style="padding:10px">
        
    </div>
    
    <div class="col-md-12" style="padding:10px">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Adicionar</button>
    </div>
</div>
@endsection

