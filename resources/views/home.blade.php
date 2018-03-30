@extends("layouts.dash")
@section("dash-title","Hoje")
@section("dash-content")
<div class="row ">
    <div class="col-lg-4 col-md-6 " style="padding:10px">
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
    </div>
</div>
@endsection