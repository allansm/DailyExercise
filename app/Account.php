<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Account extends Model
{
    protected $fillable = [
        "user_id","people_id"
    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
