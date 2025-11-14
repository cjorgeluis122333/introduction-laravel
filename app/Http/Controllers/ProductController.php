<?php

namespace App\Http\Controllers;

use App\Models\People;

class ProductController extends Controller
{
    public function index()
    {
        $people = People::all();
        return $people;

    }

    public function insertPeople($firstName, $lastName)
    {
        People::create([
            'first_name' => $firstName,
            'last_name' => $lastName
        ]);
        return redirect()->route('product.index');
    }

    public function findProductById($id)
    {

    }
}
