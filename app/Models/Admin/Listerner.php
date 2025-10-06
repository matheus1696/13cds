<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listerner extends Model
{
    /** @use HasFactory<\Database\Factories\\Admin\ListernerFactory> */
    use HasFactory;

    protected $fillable = [
        'cpf',
        'name',
        'name_filter',
        'contact',
        'is_whatsapp',
    ];

    protected $casts = [
        'is_whatsapp' => 'boolean',
    ];

    protected static function booted()
    {
        static::saving(function ($listerner) {
            $listerner->name_filter = strtolower($listerner->name);
        });
    }
}
