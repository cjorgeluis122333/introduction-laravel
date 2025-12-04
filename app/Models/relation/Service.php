<?php

namespace App\Models\relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

    // Plural: Pertenece a MUCHAS escuelas
    public function schools(): BelongsToMany
    {
        return $this->belongsToMany(School::class, 'school_services_pivot')
            ->withPivot('cost')
            ->withTimestamps();
    }
}
