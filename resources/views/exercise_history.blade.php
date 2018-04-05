@extends("layouts.dash")
@section("dash-title","Historico diario")
@section("dash-content")
<div class="row ">
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
    </div>
    <div class="col-lg-4 col-md-6 " style="padding:10px">
        <div class="col-md-12 tile-peding transaction-1" style="">
            <div class="col-md-12" style="text-align:center;padding:10px;"><h4>Exercicio</h4></div>
            <hr style="background:#eee">
            <div style="text-align: center;">
            Reps:25<br/>
            vezes:3<br/>
            dias: seg , quarta , sex, dog<br/><br/>
            <h5>Pendente</h5>
            </div>
        </div>
    </div>-->
   
    
    <table class="table table-bordered" style="background:#fff;text-align: center">
        <tr>
            <td>#</td>
            <td>titulo</td>
            <td>contagem</td>
            <td>intensidade</td>
            <td>data</td>
        </tr>
        @foreach(Auth()->user()->account->exercise->all() as $exercise)
            @foreach($exercise->historic->all() as $historic)
                <tr>
                    <td>{{$historic->id}}</td>
                    <td>{{$exercise->title}}</td>
                    <td>{{($exercise->type == "count")?"repetição":"tempo"}}</td>
                    <td>{{$historic->intensity}}</td>
                    <td>{{$historic->created_at}}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
</div>
@endsection
