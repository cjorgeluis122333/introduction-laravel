<?php

use App\Http\Controllers\relation\StudentController;
use App\Http\Controllers\school\ProductoController;
use App\Http\Resources\UserResource;
use App\Models\school\Producto;
use App\Models\user\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    $user = User::find(13);
    return new UserResource($user);
});


//Route::prefix('v1')->group(function () {
//    Route::get('/user', [UserController::class, 'index']);
//});

//Route::get('/user', function () {
//    return response()->json(User::all());
//});


Route::post('/producto', function () {
    Producto::create([
        "name" => "Maca",
        "description" => "Mac dsadaa",
        "price" => 10.00,
    ]);
    return Producto::all();
});

Route::apiResource('crud/productos', ProductoController::class);

Route::apiResource('/relation', StudentController::class);
