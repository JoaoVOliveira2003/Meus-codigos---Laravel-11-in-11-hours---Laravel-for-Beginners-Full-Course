<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Model extends EloquentModel
{
    use HasFactory;
    public $timestamps = false;

    public function car(): hasMany{
        return $this->hasMany(Car::class );
    }

}
