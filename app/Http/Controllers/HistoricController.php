<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;

class HistoricController extends Controller
{
    public function register(Request $request,Exercise $exercise){
        
        try{
            $exercise = $exercise->where("id","=",$request->q)->first();
            return view("historic")->with("exercise",$exercise);
        }catch(Exception $e){

        }
        
        return redirect()->route("home");
    }
}
