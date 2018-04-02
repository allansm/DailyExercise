<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Account;
class Exercise extends Model
{
    protected $fillable = [
        "title","type","times","account_id"
    ];
    public function account(){
        return $this->belongsTo(Account::class,"account_id");
    }
}
