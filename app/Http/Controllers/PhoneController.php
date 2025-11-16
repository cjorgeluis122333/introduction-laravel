<?php

namespace App\Http\Controllers;

use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        return Phone::all();
    }
}
