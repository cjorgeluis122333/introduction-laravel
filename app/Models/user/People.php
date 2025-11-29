<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
    ];
}
