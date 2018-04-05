@extends("layouts.dash")
@section("dash-title","Hoje:".$days[date("N")])
@section("dash-content")
<div class="row">
    <!--<div class="col-lg-4 col-md-6 " style="padding:10px">
        <div class="col-md-12 tile-incomplete" style="">
            <div class="col-md-12" style="text-align:center;padding:10px;"><h4>Exercicio</h4></div>
            <hr style="background:#eee">
            <div style="text-align: center;">
            Reps:25<br/>
            vezes:3<br/>
            dias: seg , quarta , sex, dog<br/><br/>
            <h5>Incompleto</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 " style="padding:10px">
        <div class="col-md-12 tile-complete" style="">
            <div class="col-md-12" style="text-align:center;padding:10px;"><h4>Exercicio</h4></div>
            <hr style="background:#eee">
            <div style="text-align: center;">
            Reps:25<br/>
            vezes:3<br/>
            dias: seg , quarta , sex, dog<br/><br/>
            <h5>Concluido</h5>
            </div>
        </div>
    </div>-->
    @foreach(Auth()->user()->account->exercise->all() as $exercise)
        @foreach(explode(";",$exercise->days) as $day)
            @if($days[date("N")] == $day)
                
                 <div class="col-lg-4 col-md-6 " style="padding:10px">
                   <a href="{{route("dashboard.formulario.registro")."?q=".$exercise->id}}">
                   <div class="col-md-12 {{($exercise->times -count($exercise->historic->all()) <= 0)?"tile-complete":"tile-peding"}} transaction-1" style="">
                       <div class="col-md-12" style="text-align:center;padding:10px;"><h4>{{$exercise->title}}</h4></div>
                       <hr style="background:#eee">
                       <div style="text-align: center;">
                       Tipo:{{($exercise->type == "count")?"Repetição":"Tempo"}}<br/>
                       vezes:{{$exercise->times -count($exercise->historic->all())}}<br/>
                       dias: 
                       @foreach(explode(";",$exercise->days) as $d)
                              {{$d." "}}
                       @endforeach
                       <br/><br/>
                       <h5>{{($exercise->times -count($exercise->historic->all()) <= 0)?"Concluido":"Pendente"}}</h5>
                       </div>
                   </div>
                   </a>
               </div>
                
            @endif
        @endforeach
    @endforeach
</div>
@endsection