<?php

namespace App\Models\relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Director extends Model
{
    use HasFactory;
    protected $fillable = ['name','experience_year','school_id'];


    public function school():BelongsTo{
        return $this->belongsTo(School::class);
    }
}
