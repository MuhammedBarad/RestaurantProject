<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\mealController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;
use App\Models\Meals;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cats = Categories::all();
    $meals = Meals::paginate(12);
    return view('VisitorPage',compact('cats','meals'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Users

Route::get('/Users',[UserController::class,'index'])->name('User.show');
Route::get('/Users/create',[UserController::class,'create'])->name('User.create');
Route::post('/Users/store',[UserController::class,'store'])->name('User.store');
Route::get('/Users/{id}/edit',[UserController::class,'edit'])->name('User.edit');
Route::PUT('/Users/{id}',[UserController::class,'update'])->name('User.update');
Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('User.delete');

// Category

Route::resource('/Category',categoryController::class);

// Meal

Route::resource('/Meal',mealController::class);

// Order

Route::resource('/Order',orderController::class);

// Profile

Route::get('/profile/{id}',[profileController::class,'index'])->name('profile.show');
Route::put('/update/{id}',[profileController::class,'update'])->name('profile.update');

// Orders
Route::get('/Orders',[orderController::class,'index'])->name('Order.show');
