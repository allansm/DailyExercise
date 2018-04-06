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
        return view("exercise_history")->with("days",$days);
    }
}
