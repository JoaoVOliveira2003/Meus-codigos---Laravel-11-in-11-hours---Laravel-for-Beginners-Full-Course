<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Maker extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'maker_id'
    ];
    public function car(): hasMany{
        return $this->hasMany(Car::class );
    }

    public function models(): hasMany{
        return $this->hasMany(Model::class );
    }

    public function maker(): BelongsTo{
        return $this->belongsTo(Maker::class );
    }
}
