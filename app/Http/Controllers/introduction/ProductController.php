<?php

namespace App\Http\Controllers\introduction;

use App\Http\Controllers\Controller;
use App\Models\school\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
}
