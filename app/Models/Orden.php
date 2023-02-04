<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ordenes';

    public function platillos()
    {
        return $this->belongsToMany(Platillo::class, 'orden_detalles')
        ->withPivot(['cant', 'subtotal']);
    }
}
