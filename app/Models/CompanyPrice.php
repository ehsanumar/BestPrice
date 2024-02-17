<?php

namespace App\Models;

use App\Models\User;
use App\Models\pharmacyRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'company_id',
        'pharmacy_requests_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'company_id');
    }

    public function pharmacyPrice(): BelongsTo
    {
        return $this->belongsTo(pharmacyRequest::class);
    }
}
