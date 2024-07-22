<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TechnicalChamberMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'technical_chamber_id',
        'name',
        'url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function chamber(): BelongsTo
    {
        return $this->belongsTo(TechnicalChamber::class, 'technical_chamber_id', 'id');
    }
}
