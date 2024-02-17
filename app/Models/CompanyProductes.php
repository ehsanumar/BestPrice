<?php

namespace App\Models;

use App\Models\User;
use App\Models\RequestMedicinePharmacy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompanyProductes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'price',
        'image',
        'details',
        'company_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'company_id');
    }

    public function pharmacyPrice(): HasMany
    {
        return $this->hasMany(RequestMedicinePharmacy::class);
    }
}
