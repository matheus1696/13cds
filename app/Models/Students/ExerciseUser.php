<?php

namespace App\Models\Students;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ExerciseUser extends Model
{
    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }    

    public function ExerciseAnswer(){
        return $this->belongsTo(ExerciseAnswer::class,'exercise_answer_id','id');
    }
}
