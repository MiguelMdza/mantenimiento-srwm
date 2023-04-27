<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alimento extends Model
{
    use HasFactory;

    protected $table = 'alimentos';

    /**
     * The attributes that are NOT mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'tipo',
    ];

    /**
     * The Comandas that belong to the Alimento
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comandas(): BelongsToMany
    {
        return $this->belongsToMany(Comanda::class, 'alimentos_comandas', 'alimento_id', 'comanda_id');
    }
}
