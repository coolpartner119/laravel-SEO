<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Data;
use App\Http\Controllers\SearchController;

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
Route::get('/my/myimms/PRAStatus', function(){
    return view('welcome');
});
Route::get('/', function () {
    return redirect('/my/myimms/PRAStatus');
});
Route::post('/search', [SearchController::class, 'search']);
