<?php

use App\Http\Controllers\postController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[postController::class, 'getPosts'])->name('get');
Route::get('/view/{id}',[postController::class, 'viewPost'])->name('view');
Route::get('/edit/{id}',[postController::class, 'editpost'])->name('edit');
Route::put('/update/{id}',[postController::class,'update'])->name('update');
Route::delete('/delete/{id}',[postController::class, 'deletepost'])->name('delete');
Route::get('create',[postController::class,'createPost'])->name('create');
Route::post('create',[postController::class,'storePost']);
