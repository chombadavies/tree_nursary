<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\MaterialsController;
use App\Http\Controllers\backend\CategoriesController;
use App\Http\Controllers\backend\ValuechainsController;
use App\Http\Controllers\frontend\IndexController;

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



Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::any('/',[AdminController::class,'dashboard']);
    Route::Resource('categories',CategoriesController::class);
    Route::Resource('valuechains',ValuechainsController::class);
    Route::Resource('materials',MaterialsController::class);
    Route::any('fetch_categories',[CategoriesController::class,'fetchCategories'])->name('fetch.categories');
    Route::any('fetch_valuechains',[ValuechainsController::class,'fetchValuechains'])->name('fetch.valuechains');

});

Route::get('/', [IndexController::class,'index'])->name('home');

Route::any('value_chains/{id}',[IndexController::class,'valueChains'])->name('valuechains');
Route::any('valuechains_details/{id}',[IndexController::class,'valueChainDetails'])->name('valuechain.details');
Route::any('contact_us',[IndexController::class,'contactUs'])->name('contact_us');
Route::any('/feedback',[IndexController::class,'feedBack'])->name('feedback');