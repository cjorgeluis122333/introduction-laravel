<?php

use App\Http\Controllers\middleware\MiddlewareSampleController;
use App\Http\Controllers\relation\StudentController;
use App\Http\Controllers\school\ProductoController;
use App\Http\Middleware\ExampleOne;
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
Route::post('/relation/{school_id}/attach', [StudentController::class, 'attachServiceToSchool']);

//=================================Video 9 - MIDDLEWARE:
//Middleware for specific route
Route::middleware(ExampleOne::class)
    ->get("/middleware", [MiddlewareSampleController::class, 'index'])
    ->name('index');
//Middleware for many route
Route::middleware(ExampleOne::class)->group(function () {
    Route::get('/middleware/access', [MiddlewareSampleController::class, 'noAccess']);
    Route::post('/middleware/access2', [MiddlewareSampleController::class, 'noAccess2'])
       //If you do not want to apply a middleware you use withoutMiddleware and the name of the middleware
        ->withoutMiddleware([ExampleOne::class]);
    //.......
});


Route::get("/middleware/access", [MiddlewareSampleController::class, 'noAccess'])->name('no-access');
