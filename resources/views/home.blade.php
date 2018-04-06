@extends("layouts.dash")
@section("dash-title","Hoje : ".ucwords($days[date("N")]))
@section("dash-content")
<div class="row">
    @foreach(Auth()->user()->account->exercise->all() as $exercise)
        @foreach(explode(";",$exercise->days) as $day)
            @if($days[date("N")] == $day)
                <div class="col-lg-4 col-md-6 " style="padding:10px">
                   <a href="{{route("dashboard.formulario.registro")."?q=".$exercise->id}}">
                   <div class="col-md-12 tile {{($exercise->times -count($exercise->historic->where('created_at', '>=', date('Y-m-d').' 00:00:00')) <= 0)?"tile-complete":"tile-peding"}} transaction-1" style="">
                       <div class="col-md-12" style="text-align:center;padding:10px;"><h4>{{$exercise->title}}</h4></div>
                       <br/> 
                       <div style="text-align: center;">
                       Tipo : {{($exercise->type == "count")?"Repetição":"Tempo"}}<br/>
                       Pendente Hoje : {{($exercise->times -count($exercise->historic->where('created_at', '>=', date('Y-m-d').' 00:00:00')) >= 0)?$exercise->times -count($exercise->historic->where('created_at', '>=', date('Y-m-d').' 00:00:00')):0}}<br/>
                       Dias: 
                       @foreach(explode(";",$exercise->days) as $d)
                              {{$d." "}}
                       @endforeach
                       <br/><br/>
                       <h5>{{($exercise->times -count($exercise->historic->where('created_at', '>=', date('Y-m-d').' 00:00:00')) <= 0)?"Concluido":"Pendente"}}</h5>
                       </div>
                   </div>
                   </a>
               </div>
            @endif
        @endforeach
    @endforeach
    @if(count(Auth()->user()->account->exercise->all()) <= 0)
        <div class="col-lg-12 col-md-12 " style="padding:10px">
           <a href="{{route("cadastro.exercicio")}}">
                <div class="col-md-12  transaction-1" style="color:#eee">
                    <div class="col-md-12" style="text-align:center;padding:10px;background:#007bff"><h4>Adicionar Novo Exercicio</h4></div>
                </div>
           </a>
       </div>
    @endif
</div>
@endsection