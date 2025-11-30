<?php

namespace App\Models\relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'scholar_year','school_id'];

    public function school(): BelongsTo{
        return $this->belongsTo(School::class);
    }

    public function book(): HasMany{
        return $this->hasMany(Book::class);
    }

}
