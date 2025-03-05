<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    // Defina explicitamente o nome da tabela
    protected $table = 'models'; // Nome correto da tabela

    public $timestamps = false;

    public function cars()
    {
        return $this->hasMany(Car::class, 'model_id');
    }
}
