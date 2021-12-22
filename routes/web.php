<?php

use App\Http\Controllers\ApplierController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\IsAdminMiddleware;
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
    return redirect(route('login'));
});

Route::get('/create', [ApplierController::class, 'getCreatePage'])->name('getCreatePage');

Route::post('/create-applier', [ApplierController::class, 'createApplier'])->name('createApplier');


Route::get('/update-applier/{id}', [ApplierController::class, 'getApplierById'])->name('getApplierById');

Route::patch('/update-applier/{id}', [ApplierController::class, 'updateApplier'])->name('updateApplier');

Route::delete('/delete-applier/{id}',[ApplierController::class, 'deleteApplier'])->name('deleteApplier');

Route::get('/search', [ApplierController::class, 'search'])->name('search');

Auth::routes();

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => IsAdminMiddleware::class], function(){
    Route::get('/get-applier', [ApplierController::class, 'getAppliers'])->name('getAppliers');
});
