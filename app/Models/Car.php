<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Models;

class Car extends Model
{
    use HasFactory ;
    public $timestamps = false;

    protected $fillable = [
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at',
    ];
    
    // Relation with User (Car belongs to User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Primary image (one to one)
    public function carImage(): HasOne
    {
        return $this->hasOne(CarImage::class);
    }

    // All images (one to many)
    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    // Car Features (one to one)
    public function features(): HasOne
    {
        return $this->hasOne(CarFeatures::class);
    }
    public function type(): BelongsTo
    {
        return $this->belongsTo(CarType::class, 'car_type_id');
    }
    public function model(): BelongsTo
    {
        return $this->belongsTo(Models::class, 'model_id');
    }
    public function fuel(): BelongsTo
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id');   
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');   
    }
    public function maker() : BelongsTo
    {
        return $this->belongsTo(Maker::class , 'maker_id' ) ;
    }
    
}
