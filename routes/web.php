<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",function(){
   return redirect()->route("home"); 
});
Route::get("/dashboard","PageController@index")->middleware("auth")->name("home");
Route::get("/login","PageController@login")->name("login");
Route::post("/autenticar","UserController@login")->name("autenticar");
Route::get("/logout","UserController@logout")->middleware("auth")->name("logout");
Route::get("/cadastro","PageController@register")->name("cadastro");
Route::get("/dashboard/formulario/exercicio","PageController@registerExercise")->middleware("auth")->name("cadastro.exercicio");
Route::post("/cadastrar","AccountController@register")->name("cadastro.usuario");
Route::get("/dashboard/registros","PageController@history")->middleware("auth")->name("dashboard.registros");
Route::get("/dashboard/registros/exercicio","PageController@exerciseHistory")->middleware("auth")->name("dashboard.registros.exercicio");