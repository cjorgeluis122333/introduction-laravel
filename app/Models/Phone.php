<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;
    protected $guarded = [];

    //One to One
    public function user():BelongsTo{
        return $this->belongsTo(User::class,
//            "id",
//            "user_id"
        );
    }
}
