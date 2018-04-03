<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;
use App\Historic;

class Exercise extends Model
{
    protected $fillable = [
        "title","type","times","account_id"
    ];
    public function account(){
        return $this->belongsTo(Account::class,"account_id");
    }
    public function historic(){
        return $this->hasMany(Historic::class,"exercise_id");
    }
}
