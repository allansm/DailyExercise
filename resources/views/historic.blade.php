@extends("layouts.dash")
@section("dash-title","Registrar")
@section("dash-content")
<div class="">
    <form method="post" action="{{route("dashboard.registrar.historico")}}" class="col-md-12 row">
        {!! csrf_field() !!}
        <input type="text" name="q" value="{{$exercise->id}}" hidden>
        <div class="col-md-12" style="padding:10px">
            <input type="text" class="form-control " name="title" placeholder="nome do exercicio" readonly value="{{$exercise->title}}"  autofocus="" />
        </div>
        <div class="col-md-8" style="padding:10px">
            <select class="form-control " readonly name="type" >
                <option selected hidden>{{($exercise->type == "count")?"Repetição":"Tempo"}}</option>
                
            </select>   
        </div>
        <div class="col-md-4" style="padding:10px">
            <input type="{{($exercise->type == "count")?"number":"time"}}" class="form-control " name="intensity"  placeholder="{{($exercise->type == "count")?"Repetições":"Tempo"}}"   autofocus="" />
        </div>
        

        <div class="col-md-12" style="padding:10px">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Adicionar</button>
        </div>
    </form>
</div>
@endsection

