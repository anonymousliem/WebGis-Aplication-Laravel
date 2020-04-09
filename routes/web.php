<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/home2', function () {
    return view('home2');
});

// Route::get('/maps', function () {
//     return view('maps');
// });

Route::get('test', function () {
return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/maps','MapsViewController@index'); // unyuk maps
Route::get('/showmaps','MapsViewController@showMaps'); //untuk table maps
Route::get('/maps/export_excel', 'MapsViewController@export_excel');
Route::post('/maps/upload_maps', 'MapsViewController@uploadFile');


Route::get('delete/{id}','MapsViewController@destroy');

Route::get('edit/{id}','UpdateMapsController@show');
Route::post('edit/{id}','UpdateMapsController@edit');

Route::get('insert','MapsInsertController@insertform');
Route::post('create','MapsInsertController@insert');


Route::get('/mahasiswa', function () {
    return view('templatebaru');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/user', function () {
    return view('user/index');
});


Route::get('/operator', function () {
    return view('operator/index');
});

Route::get('/updatemaps', function () {
    return view('updateMaps');
});

// Route::get('/table', function () {
//     return view('table_maps');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');


Route::get('/registeraccount','AccountController@showForm');
Route::post('createaccount','AccountController@insertForm');
Route::get('delete/{id}','AccountController@deleteAccount');
Route::get('/table_user','AccountController@showData');

Route::get('editAccount/{id}','AccountController@show');
Route::post('editAccount/{id}','AccountController@edit');
