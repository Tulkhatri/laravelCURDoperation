<?php

use App\Http\Controllers\UserController;
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
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'showUsers')->name('showUsers');
    Route::get('/user/{id}', 'singleUser')->name('view.user');
    Route::get('/user/{id}', 'userDetail')->name('userDetail');
    Route::post('/add', 'addUser')->name('addUser');
    Route::post('/update/{id}', 'updateUser')->name('update.user');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
});
Route::view('newUser', '/adduser');
