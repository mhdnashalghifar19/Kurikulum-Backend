<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
// Route::get('book', 'BookController@book');

// Route::get('bookall', 'BookController@bookAuth')->middleware('jwt.verify');
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('/film', 'FilmController@index'); // Menampilkan semua data
    Route::post('/film', 'FilmController@store'); // Menambah data
    Route::get('/film/{id}', 'FilmController@show'); // Menampilkan data berdasar id
    Route::patch('/film/{id}', 'FilmController@update'); // Mengupdate data
    Route::delete('/film/{id}', 'FilmController@destroy'); // Menghapus data
});

// Route::get('/film', 'FilmController@index'); // Menampilkan semua data
// Route::post('/film', 'FilmController@store'); // Menambah data
// Route::get('/film/{id}', 'FilmController@show'); // Menampilkan data berdasarkan id 
// Route::patch('/film/{id}', 'FilmController@update'); // Mengupdate data
// Route::delete('/film/{id}', 'FilmController@destroy'); // Menghapus data