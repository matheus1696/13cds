<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresentialActivity extends Model
{
    /** @use HasFactory<\Database\Factories\Students\PresentialActivityFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'workload',
        'start_date',
    ];
}
