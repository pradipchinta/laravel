<?php

use App\Http\Controllers\navcontroller;
use App\Http\Controllers\thisController;
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

Route::get('/pradip', function () {
    return view('helloworld');
});

Route::get('/new','miss@new');

Route::get('/pradip', function () {
    return view('helloworld');
});

Route::get('/this', function () {
    $date="this is my first program";
    return view('newfle',compact('date'));
});



 Route::get('/index','navcontroller@add');

Route::get('/footer', 'navcontroller@footer');

Route::get('/about','navcontroller@about');




 Route::get('/pra','thisController@add');

Route::post('/index','thisController@store');

Route::get('/pradip11', function () {
    return view('ss');
});
Route::get('/p','thisController@p');



Route::get('/disp','Dispcontroller@index');

Route::post('/dis','Dispcontroller@store');






Route::get('/customers', 'CustomerController@index');


Route::get('/customers/create','CustomerController@create');

Route::post('/customers','CustomerController@store');

Route::get('/customers/{customer}', 'CustomerController@show');

Route::get('/customers/{customer}/edit', 'CustomerController@edit');

Route::patch('/customers/{customer}', 'CustomerController@update');

Route::delete('/customers/{customer}', 'CustomerController@destroy');
