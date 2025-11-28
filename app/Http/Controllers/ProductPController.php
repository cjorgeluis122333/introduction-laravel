<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductPController extends Controller
{
    public function index()
    {
    $products =  Producto::latest()->paginate(5);
        return view( 'product.index',compact("products"));

//        $product2s = Product2::all();
//        return $product2s;
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string|max:255",
            "price" => "required|min:1",
            "description" => "required|string|max:255"

        ]);

        Producto::create($validatedData);

        return redirect('product2')->with('success', 'Product has been created!');
    }

    public function create(){

        return view('product.create');

    }

    public function deleteProductById()
    {
    }

    public function updateProduct()
    {
    }

}
