<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("home");
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
}
