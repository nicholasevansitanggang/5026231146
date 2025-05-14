<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba ;

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

//Rout.get(); -> java

Route::get('/', function () {
    return view('welcome');
}); //simple controller

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);



// / -> publised url
// isi function yang kedua adalah viewnya ada direct html(super simple), view blade(simple flow), dan controller(complex) untuk aksesnya
