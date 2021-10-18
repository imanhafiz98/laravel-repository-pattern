<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CONTACT

Route::get('/', [ContactController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contact/store', 'ContactController@store')->name('contacts.store'); 

Route::name('student.')->prefix('student')->namespace('Student')->group(function (){
    Route::get('index','StudentController@index')->name('index');
    Route::post('store','StudentController@storeOrUpdate')->name('store');
    Route::get('view/{id}','StudentController@view')->name('view');
    Route::put('update/{id}','StudentController@storeOrUpdate')->name('update');
    Route::get('delete/{id}','StudentController@delete')->name('delete');
});

