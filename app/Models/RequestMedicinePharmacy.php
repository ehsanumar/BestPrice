<?php

namespace App\Models;

use App\Models\{User, CompanyProductes};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestMedicinePharmacy extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'pharmacy_id',
        'product_id',
    ];

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'pharmacy_id');
    }

    public function pharmacyPrice(): BelongsTo
    {
        return $this->belongsTo(CompanyProductes::class);
    }
}
