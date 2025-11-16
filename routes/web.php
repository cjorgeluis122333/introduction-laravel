<?php

use App\Http\Controllers\PeopleController;
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
Route::get("/product",[PeopleController::class,"index"])->name("product.index");
Route::get("/product/show/{people}",[PeopleController::class,"findPeopleById"])->name("product.show");
//withoutMiddleware if I do not use that methode you have a 419 error
Route::post('/product/insert', [PeopleController::class, 'insertPeople'])->withoutMiddleware(['web']);
Route::delete('/product/delete/{id}', [PeopleController::class, 'deletePeopleById'])->withoutMiddleware(['web']);
Route::put('/product/update/{id}', [PeopleController::class, 'updatePeopleById'])->withoutMiddleware(['web']);
