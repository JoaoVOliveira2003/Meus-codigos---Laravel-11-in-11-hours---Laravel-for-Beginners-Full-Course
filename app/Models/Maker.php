<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'maker_id'
    ];

    // Relacionamento HasMany com o Car
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    // Relacionamento HasMany com o Model (certifique-se que Model está importado corretamente)
    public function models(): HasMany
    {
        return $this->hasMany(Model::class);
    }

    // Corrigindo para usar a factory correta
    protected static function newFactory()
    {
        return \Database\Factories\MakerFactory::new();
    }
}
