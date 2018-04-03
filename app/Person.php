<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;

class Person extends Model
{
    protected $fillable = [
        'nome','sobrenome','email'
    ];
    public function account(){
        return $this->hasOne(Account::class,"people_id");
    }
}
