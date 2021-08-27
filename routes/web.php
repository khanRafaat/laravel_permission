<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
});

Route::get('/dashboard',[UserController::class,'index'])->middleware(['auth'])->name('dashboard');



route::get('/create/post',[UserController::class,'create'])->middleware(['permission:create'])->name('create.post');
route::get('/edit/post',[UserController::class,'edit'])->middleware(['permission:edit'])->name('edit.post');
route::get('/update/post',[UserController::class,'update'])->middleware(['permission:update'])->name('update.post');
route::get('/delete/post',[UserController::class,'delete'])->middleware(['permission:delete'])->name('delete.post');

require __DIR__.'/auth.php';
