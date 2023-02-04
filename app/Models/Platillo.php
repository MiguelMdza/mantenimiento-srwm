<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platillo extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;
    protected $table = 'platillos';

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'platillos_ingredientes')
        ->withPivot('cant_usa');
    }
}
