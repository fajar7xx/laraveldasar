<?php

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

// use Symfony\Component\Routing\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     // return 'Hello World';
//     return view('index');
// });
// Route::get('/about', function () {

//     $nama = 'Fajar Siagian!';
//     return view('about', ['nama' => $nama]);
// });


// cara akses controller dan metdho
// jalanin controlelr dan method ini
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
