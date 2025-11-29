<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoRequest;
use App\Models\school\Producto;
use Illuminate\Http\Request;

/**
 * @route: /api/crud/productos
 *
 */
class ProductoController extends Controller
{
    /**
     * @methode: The method is a GET: Used for list ALL
     */
    public function index(Request $request)
    {

        $product = Producto::latest()->paginate($request->query('per_page', '5'));

        return $product;
    }

    /**
     * @methode: The methode is a Get: Used for show specific user
     */
    public function show(Request $request)
    {
        $producto = Producto::find(3);
        return $producto;
    }

    /**
     * @methode: The methode is a POST
     */
    public function store(ProductoRequest $request)
    {
        $validation = $request->validate(
            [
                'name' => ['required', 'string', 'min:3', 'max:255'],
                'price' => ['required', 'numeric'],
                'description' => ['required', 'string', 'min:3', 'max:255'],
            ]
        );
        $producto = Producto::create($validation);
        return response()->json(['data' => $producto, 'Successfully insertion'], 201);
    }


    /**
     * @methode: The method is a PUT
     */
    public function update(Request $request)
    {


    }

    /**
     * @methode: The methode is a DELETE
     */
    public function destroy(Request $request)
    {

    }


}
