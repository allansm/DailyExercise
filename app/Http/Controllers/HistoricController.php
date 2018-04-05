<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercise;
use App\Historic;
use Illuminate\Support\Facades\DB;
class HistoricController extends Controller
{
    public function historic(Request $request,Exercise $exercise){
        
        try{
            $exercise = $exercise->where("id","=",$request->q)->first();
            return view("historic")->with("exercise",$exercise);
        }catch(Exception $e){

        }
        
        return redirect()->route("home");
    }
    public function register(Request $request,Historic $historic){
        DB::beginTransaction();
        try{
            $historic->exercise_id = $request->q;
            $historic->intensity = $request->intensity;
            $historic->save();
            DB::commit();
            return redirect()->route("home");
        }catch(Exception $e){
            DB::rollback();
        }
        return redirect()->route("home");
    }
    public function delete(Request $request ,Historic $historic){
        DB::beginTransaction();
        try{
            $historic = $historic->where("id","=",$request->q)->first();
            $historic->delete();
            DB::commit();
        }catch(Exception $e){
            DB::rollback();
        }
        return redirect()->back();
    }
}
