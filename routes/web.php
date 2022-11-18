<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TypesController;
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
    return view('piechart');
});
Route::get('/city',[StudentsController::class,'index']);

Route::resource('user', Controller::class);
Route::any('users/{id}', function ($id) {

});
Route::post('/edit/{id}',[StudentsController::class,'edit']);
route::get('/type',[TypesController::class,'index']);

