<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\CompanyPrice;
use App\Models\pharmacyRequest;
use App\Models\CompanyProductes;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\RequestMedicinePharmacy;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function companyProductes() :HasMany{
        return $this->hasMany(CompanyProductes::class);
    }
    public function pharmacyRequist() :HasMany{
        return $this->hasMany(pharmacyRequest::class);
    }
    public function requestMedicinePharmacy() :HasMany{
        return $this->hasMany(RequestMedicinePharmacy::class);
    }
    public function companyPrice() :HasMany{
        return $this->hasMany(CompanyPrice::class);
    }
}
