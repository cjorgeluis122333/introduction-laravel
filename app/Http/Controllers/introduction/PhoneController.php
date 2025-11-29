<?php

namespace App\Http\Controllers\introduction;

use App\Http\Controllers\Controller;
use App\Models\user\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        return Phone::all();
    }
}
