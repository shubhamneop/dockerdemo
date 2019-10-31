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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users',function(){
  $data = App\User::with('userposts')->get();
  dd($data);
});

Route::resource('posts','PostController');

Route::resource('address','AddressController');


Route::get('addresss',function(){
return App\Address::with('useraddress')->get();
});