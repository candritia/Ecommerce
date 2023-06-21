<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LayoutController;

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

// Route::get('layout', function () {
//     return view('layout');
// });



Route::get('shop', function () {
    return view('shop');
});


Route::get('/',function(){
    return view('welcome');
})->name('login');
// Route::get('/',function(){
//     return view('welcome');
// })->name('login');

Route::post('auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);
Route::get('daftar',[UserController::class,'daftar']);
Route::post('daftar/create',[UserController::class,'create']);
// Route::get('Admin',function(){
//     return view('admiin');
// })->name('login');
Route::middleware('auth')->group(function () {
Route::get('layout',[LayoutController::class,'show'])->middleware('admin');
Route::get('layout/add',[LayoutController::class,'add']);
Route::post('layout/create',[LayoutController::class,'create']);
Route::get('layout/hapus/{id}',[LayoutController::class,'hapus']);
Route::get('layout/edit/{id}',[LayoutController::class,'edit']);
Route::post('layout/update/{id}',[LayoutController::class,'update']);
Route::get('layout/cari',[LayoutController::class,'cari']);
Route::get('detail/{id}',[LayoutController::class,'detail']);
Route::post('chart/{id}',[LayoutController::class,'chart']);
Route::get('chart',[LayoutController::class,'viewchart']);
});


Route::get('shop',[ShopController::class,'show']);
// Route::get('portofolio/add',[PortofolioController::class,'add']);
// Route::post('portofolio/create',[PortofolioController::class,'create']);
// Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
// Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
// Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);
// Route::get('portofolio/cari',[PortofolioController::class,'cari']);
