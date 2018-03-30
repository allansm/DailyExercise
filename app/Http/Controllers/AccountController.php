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
        if($request->senha == $request->csenha){
            try{
                DB::beginTransaction();
                $person->nome = $request->nome;
                $person->sobrenome = $request->sobrenome;
                $person->email = $request->email;
                $person->save();
                
                $user->login = $request->login;
                $user->password = bcrypt($request->senha);
                $user->save();
                DB::commit();
                return redirect()->route("home");
            }catch(Exception $e){
                DB::rollback();
                print("<b style='color:#900'>error!!</b>");
            }
        }
    }
}
