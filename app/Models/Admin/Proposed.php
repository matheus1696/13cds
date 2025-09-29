<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposed extends Model
{
    /** @use HasFactory<\Database\Factories\\Admin\ProposedFactory> */
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'origin',
        'votes_count',
        'type',
    ];

    protected $casts = [
        'votes_count' => 'integer',
    ];
}
