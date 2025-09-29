<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegate extends Model
{
    /** @use HasFactory<\Database\Factories\\Admin\delegateFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cpf',
        'name',
        'name_filter',
        'contact',
        'is_whatsapp',
        'origin',
        'votes_count',
        'type',
        'segment_id',
        'participated',
    ];

    protected $casts = [
        'is_whatsapp' => 'boolean',
        'votes_count' => 'integer',
        'participated' => 'boolean',
    ];

    protected static function booted()
    {
        static::saving(function ($delegate) {
            $delegate->name_filter = strtolower($delegate->name);
        });
    }

    // Relacionamento com Segment
    public function Segment()
    {
        return $this->belongsTo(Segment::class);
    }
}
