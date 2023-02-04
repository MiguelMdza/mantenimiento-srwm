<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingrediente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'ingredientes';
    public $timestamps = false;

    public function proveedor()
    {
        return $this->hasOne(Proveedor::class);
    }

    public function platillo()
    {
        return $this->belongsTo(Platillo::class);
    }
}
