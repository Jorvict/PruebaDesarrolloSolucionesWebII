<?php

use Illuminate\Support\Facades\Route;
use resources\css;

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

// Route::get('/empleados', 'EmpleadosController@index');
// Route::get('/empleados/create', 'EmpleadosController@create');

Route::resource('empleados', 'EmpleadosController');

// Route::get('/empleados', function () {
//     return view('empleados.index');
// });

// Route::get('/empleados/create', function () {
//     return view('empleados.create');
// });
