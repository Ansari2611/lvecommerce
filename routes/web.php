<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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












Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/redirect',[AdminController::class,'index'])->name('home');
Route::get('/product',[AdminController::class,'product']);
Route::get('/showproduct',[AdminController::class,'showproduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
Route::get('/updateproduct/{id}',[AdminController::class,'editproduct']);
Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
Route::get('/showorder',[AdminController::class,'showorder']);
Route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);
Route::get('/',[UserController::class,'index']);
Route::get('/search',[UserController::class,'search']);
Route::post('/addcart/{id}',[UserController::class,'addcart']);
Route::post('/product',[ProductController::class,'store']);
Route::get('/showcart',[UserController::class,'showcart']);
Route::get('/deletecart/{id}',[UserController::class,'deletecart']);
Route::post('/order',[UserController::class,'confirmorder']);

Route::get('/about',[AboutController::class,'showcart'])->name('about');
Route::get('/contact',[ContactController::class,'showcart'])->name('contact');

require __DIR__.'/auth.php';
