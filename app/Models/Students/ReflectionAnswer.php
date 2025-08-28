<?php

namespace App\Models\Students;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class ReflectionAnswer extends Model
{
    //    
    protected $fillable = [
        'reflection_id',
        'user_id',
        'status',
        'title',
        'subject',
        'quote',
        'description',
        'evaluation',
        'evaluation_feedback',
        'evaluation_user_id'
    ];

    public function Reflection(){
        return $this->belongsTo(Reflection::class,'reflection_id','id');
    }

    public function User(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function EvaluationUser(){
        return $this->belongsTo(User::class,'evaluation_user_id','id');
    }
    
}
