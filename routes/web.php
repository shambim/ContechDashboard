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

Route::get('/dash', function () {
    return view('welcome');
});

Route::get('/Dashboard','DashboardController@index')->name('dashboard.index');

Route::get('/Employee/lists','DashboardController@lists')->name('employee.lists');

Route::get('/Employee/{employee_id}/edit','DashboardController@edit')->name('employee_edit');
Route::get('/Employee/{employee_id}/delete','DashboardController@delete')->name('employee_delete');
Route::get('/Employee/create','DashboardController@create')->name('employee.create');
Route::post('/Employee/store','DashboardController@store')->name('employee.store');
