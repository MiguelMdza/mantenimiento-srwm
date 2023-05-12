<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comanda extends Model
{
    use HasFactory;

    protected $table = 'comandas';

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
        'total',
        'comentarios',
    ];

    /**
     * The Mesas that belong to the Comanda
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mesas(): BelongsToMany
    {
        return $this->belongsToMany(Mesa::class, 'comandas_mesas', 'comanda_id', 'mesa_id');
    }

    /**
     * The Alimentos that belong to the Comanda
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function alimentos(): BelongsToMany
    {
        return $this->belongsToMany(Alimento::class, 'alimentos_comandas', 'comanda_id', 'alimento_id');
    }
}
