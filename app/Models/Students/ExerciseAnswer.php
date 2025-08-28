<?php

namespace App\Models\Students;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\Students\ExerciseAnswerFactory> */
    use HasFactory;   

    protected $fillable = [
        'exercise_id',
        'user_id',
        'status',
        'title',
        'description',
        'evaluation',
        'evaluation_feedback',
        'evaluation_user_id'
    ];

    public function Exercise(){
        return $this->belongsTo(Exercise::class,'exercise_id','id');
    }

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function ExerciseUsers(){
        return $this->belongsToMany(User::class, 'exercise_users', 'exercise_answer_id', 'user_id');
    }
}
