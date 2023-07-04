<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ControllerHome;
// use App\Http\Controllers\ProdutoController;


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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [ControllerHome::class, 'index'])->name('home.index');
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/{id}/edit', [ProdutoController::class, 'edit'])->where('id','[0-9]+')->name('produto.edit');
Route::put('/{id}', [ProdutoController::class, 'update'])->where('id','[0-9]+')->name('produto.edit');
Route::delete('/{id}', [ProdutoController::class, 'destroy'])->where('id','[0-9]+')->name('produto.destroy');
Route::any('/produto/search', [ProdutoController::class, 'search'])->name('produto.search');
Route::post('/produto/search', [ProdutoController::class, 'search'])->name('produto.search');