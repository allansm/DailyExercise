<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class ExerciseController extends Controller
{
    public function register(Request $request, Exercise $exercise){
       try{
            if(isset($request->days) && isset($request->title) && isset($request->type) && isset($request->times)){
                $exercise->title = $request->title;
                $exercise->type = $request->type;
                $exercise->times = $request->times;
                $concat = "";
                $exercise->account_id = Auth()->user()->account->id;
                foreach($request->days as $val){
                    $concat.=$val.";";
                }
                $exercise->days = $concat;
                $exercise->save();
                return redirect()->route("home");
            }
       }catch(Exception $e){
          
       }
       return redirect()->route("cadastro.exercicio");
    }
}
