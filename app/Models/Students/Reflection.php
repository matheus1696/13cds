<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reflection extends Model
{
    /** @use HasFactory<\Database\Factories\Students\ReflectionFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'workload',
        'works_received',
        'start_date',
        'end_date',
    ];

    public function ReflectionAnswer(){
        return $this->hasMany(ReflectionAnswer::class, 'reflection_id');
    }
}
