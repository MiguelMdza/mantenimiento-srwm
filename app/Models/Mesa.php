<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mesa extends Model
{
    use HasFactory;

    protected $table = 'mesas';

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
        'disponible',
        'cantidad_personas',
    ];

    /**
     * Get the Usuario that owns the Mesa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function urg(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * The Comandas that belong to the Mesa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comandas(): BelongsToMany
    {
        return $this->belongsToMany(Comanda::class, 'comandas_mesas', 'mesa_id', 'comanda_id');
    }
}
