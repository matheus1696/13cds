<?php

namespace App\Models\Professions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    /** @use HasFactory<\Database\Factories\Professions\ProfessionFactory> */
    //use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'category',
        'subcategory',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
