<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pharmacyRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'image',
        'pharmacy_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pharmacy_id');
    }
}
