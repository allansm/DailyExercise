<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exercise;

class Historic extends Model
{
    protected $fillable = ["exercise_id","intensity"];
    
    public function exercise(){
        return $this->belongsTo(Exercise::class,"exercise_id");
    }
}
