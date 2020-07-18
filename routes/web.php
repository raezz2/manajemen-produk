<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', function () {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = \App\User::all();
            return view('adminhome', $users);
        }
    });

});

/*========================================================== Merek ===================================================================*/
Route::get('/merek', 'MerekController@index')->name('merek.index');

Route::get('/merek/create', 'MerekController@create')->name('merek.create');
Route::post('/merek/create','MerekController@store');

Route::get('/merek/{merek}/edit', 'MerekController@edit')->name('merek.edit');

Route::patch('/merek/{merek}/edit', 'MerekController@update')->name('merek.update');
Route::delete('/merek/{merek}/delete', 'MerekController@destroy')->name('merek.destroy');

/*========================================================== Kategori ===================================================================*/
Route::get('/kategori', 'KategoriController@index')->name('kategori.index');

Route::get('/kategori/create', 'KategoriController@create')->name('kategori.create');
Route::post('/kategori/create','KategoriController@store');

Route::get('/kategori/{kategori}/edit', 'KategoriController@edit')->name('kategori.edit');

Route::patch('/kategori/{kategori}/edit', 'KategoriController@update')->name('kategori.update');
Route::delete('/kategori/{kategori}/delete', 'KategoriController@destroy')->name('kategori.destroy');

/*========================================================== Produk ===================================================================*/
Route::get('/produk', 'ProdukController@index')->name('produk.index');

Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::post('/produk/create','ProdukController@store');

Route::get('/produk/{produk}/edit', 'ProdukController@edit')->name('produk.edit');

Route::patch('/produk/{produk}/edit', 'ProdukController@update')->name('produk.update');
Route::delete('/produk/{produk}/delete', 'ProdukController@destroy')->name('produk.destroy');
