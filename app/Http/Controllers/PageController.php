<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $days = ["","segunda","terça","quarta","quinta","sexta","sabado","domingo"];
        return view("home")->with("days",$days);
    }
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }
    public function registerExercise(){
        return view("register_exercise");
    }
    public function history(){
        return view("history");
    }
    public function exerciseHistory(){
        $days = ["","segunda","terça","quarta","quinta","sexta","sabado","domingo"];
        return view("exercise_history2")->with("days",$days);
    }
    public function statistics(){
        $exercises = Auth()->user()->account->exercise->all();
        $allExercisesHistoric = null;
        foreach($exercises as $exercise){
            $historics = $exercise->historic->all();
            $allExerciseHistoric[] = $historics;
        }
        $mat = null;
        $count = 0;
        foreach($allExerciseHistoric as $historicos){
            $count++;
            foreach($historicos as $historico){
                $mat[$count]["name"] = $historico->exercise->title;
                $mat[$count]["type"] = $historico->exercise->type;
                $mat[$count]["times"] = (!isset($mat[$count]["times"]))?0:$mat[$count]["times"]+1;
                if(!isset($mat[$count]["maxValue"])){
                    $mat[$count]["maxValue"] = $historico->intensity;
                }else{
                    $mat[$count]["maxValue"] = ($mat[$count]["maxValue"] <= $historico->intensity)?$historico->intensity:$mat[$count]["maxValue"];
                }
                $mat[$count]["totalValue"] = (!isset($mat[$count]["totalValue"]))?0:$mat[$count]["totalValue"]+$historico->intensity;
            }
        }
        return view("statistics")->with("mat",$mat);
    }
}
