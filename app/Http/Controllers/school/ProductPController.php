<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\school\Producto;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

    public function edit(Producto $p){
        return view( 'product.update',compact("p"));

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

    public function destroy($id)
    {
        try {
            $producto = Producto::findOrFail($id);
            $producto->delete();
        } catch (ModelNotFoundException $e) {
            response()->json([
                'data' => $e, 'message' => 'Producto no encontrado'
            ]);
        }



    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|string|max:255",
            "price" => "required|min:1",
            "description" => "required|string|max:255"
        ]);

        try {
            $producto = Producto::findOrFail(3);
            $producto->update($validate);

        } catch (ModelNotFoundException $e) {
            response()->json([
                'data' => $e, 'message' => 'Producto no encontrado'
            ],
                404);
        }
    }

}
