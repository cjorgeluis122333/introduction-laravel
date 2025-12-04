<?php

namespace App\Models\relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'address'];

    public function services(): BelongsToMany
    {
        // Especificamos 'school_service' por si acaso, y los pivotes extra
        return $this->belongsToMany(Service::class, 'school_services_pivot')
            ->withPivot('cost')
            ->withTimestamps();
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function director(): HasOne
    {
        return $this->hasOne(Director::class);
    }
}
