<?php

namespace App\Http\Requests;

use App\Models\middleware\UserAuth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:2',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
