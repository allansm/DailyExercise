<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\User;
use App\Person;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function register(Request $request,User $user,Person $person,Account $account){
        DB::beginTransaction();
        if($request->senha == $request->csenha){
            try{
                $person->nome = $request->nome;
                $person->sobrenome = $request->sobrenome;
                $person->email = $request->email;
                $person->save();
                
                $person = $person->where("email","=",$person->email)->first();
                
                $user->login = $request->login;
                $user->password = bcrypt($request->senha);
                $user->save();
                
                $user = $user->where("login","=",$user->login)->first();
                
                $account->user_id = $user->id;
                $account->people_id = $person->id;
                $account->save();
                
                DB::commit();
                return redirect()->route("home");
            }catch(Exception $e){
                DB::rollback();
                print("<b style='color:#900'>error!!</b>");
            }
        }
    }
}
