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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard');
Route::group([
    'namespace' => 'App\Http\Controllers'
], function ($router) {
    Route::get('/dashboard', 'PagesController@index');
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
    // Route::get('employee/create', 'EmployeeController@create');
    // Route::post('employee', 'OverTimeController@saveEmployee');
    // Route::post('overtime', 'OverTimeController@saveOvertime');
});
