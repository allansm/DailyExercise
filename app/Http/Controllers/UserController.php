<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request,User $user){
        $user = $user->where("login","=",$request->login)
                ->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                Auth()->login($user);
                return redirect()->route("home");
            }
        }
        return redirect()->route("login");
    }
    public function logout(){
        Auth()->logout();
        return redirect()->route("home");
    }
}
