<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelType extends Model
{
    use HasFactory;
    
    // Defina o nome da tabela corretamente
    protected $table = 'fuel_types'; 

    public $timestamps = false;
    
    protected $fillable = [
        'name',
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
