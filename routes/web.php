<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ServiceController;   
use App\Http\Controllers\WorkerController; 
use App\Http\Controllers\OrderController;       

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
    return view('interface.index');
});
Route::get('/ourgallery ', function () {
    return view('interface.gallery');
});
Route::get('ourusertable', [OrderController::class,'show_all_booking'])->name('public.ourusertable');
Route::post('userTable', [OrderController::class,'store_booking'])->name('public.usertable');
Route::get('userprofile', [WorkerController::class,'store_worker'])->name('public.userprofile');
Route::get('ourbook/{id}', [OrderController::class,'book_now'])->name('public.book')->middleware('auth');
Route::get('ourjoinus', [WorkerController::class,'join_worker'])->name('public.joinus');
Route::get('ourservice', [ServiceController::class,'show_all_service'])->name('public.allservice');
// admin side   
Route::resource('/admin/user', UserController::class)->middleware('admin.auth');
Route::resource('/service', ServiceController::class)->middleware('admin.auth');
Route::resource('/worker', WorkerController::class)->middleware('admin.auth');
Route::resource('/order', OrderController::class)->middleware('admin.auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
