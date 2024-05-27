<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
});
Route::prefix('admin')->group(function () {
// category
Route::get('create-category',[HomeController::class,'view_category'])->name('home');
Route::post('category',[CategoryController::class,'creates'])->name('admin.create-category');
Route::get('get_category_by_id/{id}',[CategoryController::class,'get_category_id'])->name('admin.get_category_id');
Route::get('data_category',[CategoryController::class,'select_data'])->name('admin.data_category');
Route::post('delete_category',[CategoryController::class,'delete_item'])->name('admin.delete_category');
Route::post('update_category',[CategoryController::class,'update_category'])->name('admin.update_category');
Route::post('update_trangthai',[CategoryController::class,'update_trangthai'])->name('admin.update_trangthai_category');
Route::get('create-product',[ProductController::class,'get_create_product'])->name('admin.get-create-product');
Route::post('create_product',[ProductController::class,'create_product'])->name('admin.create-product');
Route::get('product-management',[ProductController::class,'product_management'])->name('admin.product-management');
Route::get('get-product-id/{id}',[ProductController::class,'get_product_id']);
Route::post('product-delete',[ProductController::class,'delete_product'])->name('admin.delete_product');
Route::post('update-product',[ProductController::class,'update_product'])->name('admin.update_product');
});   
