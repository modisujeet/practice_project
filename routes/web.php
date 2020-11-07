<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
    // return redirect ('about');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Creating the routes for the controller file 
// Route::get("path", "controller file");

// Route::get("users","Users@index"); used in laravel 6 0r 7

// understanding controller 
Route::get("users", [UsersController::class, 'index']);

// calling view from routes directly
// Route::get("/user/{name}", function($name){
//     return view("users", ['name' => $name]);
// });

// we can do this by following way as well
// Route::view("user", "users");

// calling users.blade.php from controller
Route::get("user", [UsersController::class, 'loadView']);

Route::post("form", [FormController::class, 'getData']);
Route::view("login", "form");