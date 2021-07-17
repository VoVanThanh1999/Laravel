<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VMatchController;
use App\Http\Controllers\MatchDetailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::get('admin', function () {
    return view('index');
});
//User
Route::get('admin/users', [UserController::class, 'index'])->name('index.user');
Route::get('admin/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('admin/users/create', [UserController::class, 'store'])->name('store.user');
Route::get('admin/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('admin/users/update', [UserController::class, 'update'])->name('user.update');
Route::get('admin/users/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

//Order
Route::get('admin/orders', [OrderController::class, 'index'])->name('index.order');
Route::get('admin/orders/create', [OrderController::class, 'create'])->name('order.create');
Route::post('admin/orders/create', [OrderController::class, 'store'])->name('store.order');
Route::get('admin/orders/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::post('admin/orders/update', [OrderController::class, 'update'])->name('order.update');
Route::get('admin/orders/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');

//OrderDetail
Route::get('admin/orderdetails', [OrderDetailController::class, 'index'])->name('index.orderdetail');
Route::get('admin/orderdetails/create', [OrderDetailController::class, 'create'])->name('orderdetail.create');
Route::post('admin/orderdetails/create', [OrderDetailController::class, 'store'])->name('store.orderdetail');
Route::get('admin/orderdetails/edit/{id}', [OrderDetailController::class, 'edit'])->name('orderdetail.edit');
Route::post('admin/orderdetails/update', [OrderDetailController::class, 'update'])->name('orderdetail.update');
Route::get('admin/orderdetails/delete/{id}', [OrderDetailController::class, 'delete'])->name('orderdetail.delete');

// Match
Route::get('admin/vmatches', [VMatchController::class, 'index'])->name('index.vmatch');
Route::get('admin/vmatches/create', [VMatchController::class, 'create'])->name('vmatch.create');
Route::post('admin/vmatches/create', [VMatchController::class, 'store'])->name('store.vmatch');
Route::get('admin/vmatches/edit/{id}', [VMatchController::class, 'edit'])->name('vmatch.edit');
Route::post('admin/vmatches/update', [VMatchController::class, 'update'])->name('vmatch.update');
Route::get('admin/vmatches/delete/{id}', [VMatchController::class, 'delete'])->name('vmatch.delete');


//MatchDetail
Route::get('admin/matchdetails', [MatchDetailController::class, 'index'])->name('index.matchdetail');
Route::get('admin/matchdetails/create', [MatchDetailController::class, 'create'])->name('matchdetail.create');
Route::post('admin/matchdetails/create', [MatchDetailController::class, 'store'])->name('store.matchdetail');
Route::get('admin/matchdetails/edit/{id}', [MatchDetailController::class, 'edit'])->name('matchdetail.edit');
Route::post('admin/matchdetails/update', [MatchDetailController::class, 'update'])->name('matchdetail.update');
Route::get('admin/matchdetails/delete/{id}', [MatchDetailController::class, 'delete'])->name('matchdetail.delete');

//Admin
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('index.dashboard');
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login/check', [AdminController::class, 'loginCheck'])->name('login.check');
Route::get('register', [AdminController::class, 'register'])->name('register');
Route::post('register/create', [AdminController::class, 'registerCreate'])->name('register.create');

// HomePage
Route::get('homepage', [HomeController::class, 'homepage']);
