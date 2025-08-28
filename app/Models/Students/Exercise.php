<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    /** @use HasFactory<\Database\Factories\Students\ExerciseFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'workload',
        'works_received',
        'start_date',
        'end_date',
    ];

    public function ExerciseAnswer(){
        return $this->hasMany(ExerciseAnswer::class, 'exercise_id');
    }
}
