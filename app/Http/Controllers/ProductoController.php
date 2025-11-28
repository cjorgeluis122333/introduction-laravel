<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * @return Producto[]|\Illuminate\Database\Eloquent\Collection|\LaravelIdea\Helper\App\Models\_IH_Producto_C
     */
    public function index(Request $request)
    {

      $product =  Producto::latest()->paginate($request->query('per_page','5'));
      return $product;
    }


}
