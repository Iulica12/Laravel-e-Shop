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

Auth::routes();
Route::get('/', 'ProductsController@index'); //afisare pagina de start
Route::get('cart', 'ProductsController@cart'); //cos
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');//adaug in cos
Route::patch('update-cart', 'ProductsController@update'); //modific cos
Route::delete('remove-from-cart', 'ProductsController@remove');//sterg din cos

Route::group(['middleware' => 'auth'], function(){
    Route::get('/tasks', 'TaskController@index');
    Route::resource('tasks', 'TaskController');
    Route::post('confirm-cart', 'ProductsController@postCheckout'); //salvare cos
});

?>
