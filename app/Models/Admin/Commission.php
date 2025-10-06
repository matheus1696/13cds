<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    /** @use HasFactory<\Database\Factories\\Admin\CommissionFactory> */
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
        static::saving(function ($commission) {
            $commission->name_filter = strtolower($commission->name);
        });
    }
}
