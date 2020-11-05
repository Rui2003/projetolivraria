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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'App\Http\Controllers\LivrosController@index')
	->name('livros.index');

Route::get('/livros', 'App\http\Controllers\LivrosController@index')
	->name('livros.index');

Route::get('/autores', 'App\http\Controllers\AutoresController@index')
	->name('autores.index');

Route::get('/editoras', 'App\http\Controllers\EditorasController@index')
	->name('editoras.index');

Route::get('/generos', 'App\http\Controllers\GenerosController@index')
	->name('generos.index');