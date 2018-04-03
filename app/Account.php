<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Exercise;
use App\Person;
class Account extends Model
{
    protected $fillable = [
        "user_id","people_id"
    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function exercise(){
        return $this->hasMany(Exercise::class,"account_id");
    }
    public function person(){
        return $this->belongsTo(Person::class,"people_id");
    }
}
