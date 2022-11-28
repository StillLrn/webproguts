<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
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
    return view('home');
});
Route::get('/category/{id}', [Postcontroller::class, "searchcategory"]);
Route::get('/detailpublisher/{id}', [Postcontroller::class, "searchdetailpublishers"]);
Route::get('/bookdetail/{id}', [Postcontroller::class, "searchbook"]);
Route::get('/publisher', function () {
    return view('publisher');
});

Route::get('/publisher', function () {
    return view('publisher');
});

Route::get('/contact', function () {
    return view('contact');
});

