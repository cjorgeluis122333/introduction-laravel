<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route:<TYPE Petition(GET,POST,PUT,DELETE)> ("<Entrance Pointer>", [<ControllerCLass>,<Methode>] )
Route::get("/", [UserController::class,"index"])->name("user.index");
Route::get("/create", [UserController::class,"create"])->name("user.create");
Route::get("/filter", [UserController::class,"getUserWereAge"])->name("user.filter");
Route::get("/filter/manual",[UserController::class,"searchUserNotUseOrm"])->name("user.manual");

//People Route
/*
 * In this section I create a methods with dynamic params
 */
Route::get("/product",[ProductController::class,"index"])->name("product.index");
Route::get("/product/insert/{fistName}/{lastName}",[ProductController::class,"insertPeople"],)->name("product.insert");

