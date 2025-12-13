<?php

namespace App\Models\middleware;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // <--- Importante

class UserAuth extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; // <--- Agrégalo aquí

    protected $fillable = ["name", "email", "password"];

}
