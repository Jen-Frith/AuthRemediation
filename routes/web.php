<?php

use Illuminate\Support\Facades\Route;
use App\Message;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/message', 'MessageController');





Route::get('/listUser', 'UserController@index')->name('viewUser');






Route::get('/users/create', 'UserController@create')->name('user.create');
Route::get('/users/edit', 'UserController@edit')->name('user.edit');
Route::get('/users/destroy', 'UserController@destroy')->name('user.destroy');


Route::get('test', function () {

    $user = [
        'name' => 'Brahiam',
        'info' => 'Laravel Developer'
    ];

    \Mail::to('rua.brahiam@gmail.com')->send(new \App\Mail\NewMail($user));

    dd("success");

})->name('mailito');


Route::get('/messages', function(){

    $messages=Message::all();

    return view('messages', compact('messages'));
})->name('messages');