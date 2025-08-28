<?php

namespace App\Models\Evaluation;

use App\Models\Students\Exercise;
use App\Models\Students\PresentialActivity;
use App\Models\Students\Reflection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    /** @use HasFactory<\Database\Factories\Evaluation\EvaluationFactory> */
    //use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'presential_activity_id',
        'reflection_id',
        'exercise_id',
        'start_date',
        'end_date',
    ];

    public function PresentialActivity()
    {
        return $this->belongsTo(PresentialActivity::class, 'presential_activity_id');
    }

    public function Reflection()
    {
        return $this->belongsTo(Reflection::class, 'reflection_id');
    }

    public function Exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id');
    }
}
