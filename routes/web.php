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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('example.form');
});
//school accedamic year setting
Route::get('school_year_list','Backend\School_Year_Controller@show_list');
Route::get('school_year_create','Backend\School_Year_Controller@create_form');
Route::post('school_year_store','Backend\School_Year_Controller@store');
Route::get('school_year_edit/{id}','Backend\School_Year_Controller@school_year_edit');
Route::post('school_year_update/{id}','Backend\School_Year_Controller@School_year_update');
Route::post('school_year_status/{id}','Backend\School_Year_Controller@school_year_status');
Route::get('school_year_delete/{id}','Backend\School_Year_Controller@school_year_delete');