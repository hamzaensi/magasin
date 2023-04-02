<?php

use App\Http\Controllers\ProduitController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produits',[ProduitController::class,'index'])->name('produits.index');
Route::get('/produits/create',[ProduitController::class,'create'])->name('produits.create');
Route::post('/produits',[ProduitController::class,'store'])->name('produits.store');
Route::delete('/produits/{produit}',[ProduitController::class,'destroy'])->name('produits.destroy');
Route::get('/produits/{produit}',[ProduitController::class,'edit'])->name('produits.edit');
Route::post('/produits/{produit}',[ProduitController::class,'update'])->name('produits.update');
