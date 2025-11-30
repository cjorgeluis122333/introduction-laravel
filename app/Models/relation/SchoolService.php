<?php

namespace App\Models\relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolService extends Model
{
    use HasFactory;

    // ⚠️ Define explícitamente el nombre de la tabla pivote
    protected $table = 'school_service_pivot';
// 1. SOLUCIÓN: Indicar que NO existe una clave primaria 'id'
    // Eloquent ya no intentará obtener el 'id' al insertar.
    protected $primaryKey = null;

    // 2. SOLUCIÓN: Indicar que NO es autoincremental (esto detiene el returning "id")
    public $incrementing = false;
    // Indica qué campos puedes llenar masivamente (los FKs y el campo extra)
    protected $fillable = [
        'school_id',
        'service_id',
        'cost', // El campo adicional de tu tabla pivote
    ];

    // Deshabilita los timestamps si no los tienes en la tabla pivote.
    // Si usaste ->withTimestamps() en tus relaciones, déjalo en true (por defecto).
    // public $timestamps = false;

    // Opcional: Define las relaciones inversas
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
