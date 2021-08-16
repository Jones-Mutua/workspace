<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//laravel 8 (new)
Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products/about', [ProductsController::class,'about']);

//laravel 8 (als new)
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');
// //route to users
// Route::get('/users', function (){
//     return 'Welcome to the user stage';
// });
// //route to users -array(json)
// Route::get('/users', function(){
//     return ['php'];
// });
// //route to users - JSON OBJECTS
// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'jones',
//         'course' => 'laravel development'
//     ]);
// });
// //routte to users - function
// Route::get('/users', function(){
//     return redirect('/');
// });

//first.com == /
//first.com/users ==/users


Route::get('/products/{name}', [ProductsController::class, 'show']);
// /products = all products