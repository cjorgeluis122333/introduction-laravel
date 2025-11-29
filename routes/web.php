<?php

use App\Http\Controllers\crud\PeopleController;
use App\Http\Controllers\introduction\PhoneController;
use App\Http\Controllers\introduction\ProductController;
use App\Http\Controllers\introduction\UserController;
use App\Http\Controllers\school\ProductPController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route:<TYPE Petition(GET,POST,PUT,DELETE)> ("<Entrance Pointer>", [<ControllerCLass>,<Methode>] )
Route::get("/", [UserController::class,"index"])->name("user.index");
Route::get("/find/{id}", [UserController::class,"findUserById"])->name("user.find");
Route::get("/create", [UserController::class,"create"])->name("user.create");
Route::get("/filter", [UserController::class,"getUserWereAge"])->name("user.filter");
Route::get("/filter/manual",[UserController::class,"searchUserNotUseOrm"])->name("user.manual");

//People Route
/*
 * In this section I create a methods with dynamic params
 */
Route::get("/people",[PeopleController::class,"index"])->name("people.index");
Route::get("/people/show/{people}",[PeopleController::class,"findPeopleById"])->name("people.show");
//withoutMiddleware if I do not use that methode you have a 419 error
Route::post('/people/insert', [PeopleController::class, 'insertPeople'])->withoutMiddleware(['web']);
Route::delete('/people/delete/{id}', [PeopleController::class, 'deletePeopleById'])->withoutMiddleware(['web']);
Route::put('/people/update/{id}', [PeopleController::class, 'updatePeopleById'])->withoutMiddleware(['web']);

//Product Route
Route::get("/product",[ProductController::class,"index"])->name("product.index");

//Phone
Route::get("/phone",[PhoneController::class,"index"])->name("phone.index");
//Product 2
//Route::get("/product2",[ProductPController::class,"index"])->name("product2.index");
//Route::post('/product2/insert', [ProductPController::class, 'insertProduct'])->withoutMiddleware(['web']);
//Route::delete('/product2/delete/{id}', [ProductPController::class, 'deleteProductById'])->withoutMiddleware(['web']);
//Route::put('/product2/update/{id}', [ProductPController::class, 'updateProduct'])->withoutMiddleware(['web']);

Route::resource('product2', ProductPController::class);
