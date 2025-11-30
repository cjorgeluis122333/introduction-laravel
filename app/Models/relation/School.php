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

    public function services():BelongsToMany
    {
        return $this->belongsToMany(Service::class)->withPivot('cost');
    }

    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function director(): HasOne{
        return $this->hasOne(Director::class);
    }

}
