<?php

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
    return view('welcome');
});

// Route::get('/about', function () {
//     $nama = 'Muhammad Nasrullah Al-Ghifari';
//     return view('about', ['nama' => $nama]);
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('index');
});

Route::get('/beranda', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Students
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('students', 'StudentsController');
});




