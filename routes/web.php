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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('example.form');
});










Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');
    Route::resource('direction','Backend\Direction_Controller');
    Route::resource('behaviors','Backend\Behavior_Controller');
    Route::resource('schools','Backend\School_Controller');
    Route::resource('school_admins','Backend\School_Admins_Controller');

//    Route::resource('roles','Backend\Role');
    Route::resource('assin_role','Backend\Assin_Role_Controller');
    Route::resource('permission','Backend\Permission_Controller');
    Route::resource('assin_permission','Backend\Assion_Permission_Controller');

    //semester setting
    Route::resource('semesters','Backend\Semester_Controller');

//    Route::get('roles','Backend\Role@index');
    Route::get('/roles' , ['as' => 'roles' , 'uses'=> 'Backend\Role@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles/create','uses'=>'Backend\Role@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'Backend\Role@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'Backend\Role@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'Backend\Role@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'Backend\Role@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'Backend\Role@destroy','middleware' => ['permission:role-delete']]);

//school accedamic year setting
//    Route::get('school_year_list','Backend\School_Year_Controller@show_list');
//    Route::get('school_year_create','Backend\School_Year_Controller@create_form');
//    Route::post('school_year_store','Backend\School_Year_Controller@store');
//    Route::get('school_year_edit/{id}','Backend\School_Year_Controller@school_year_edit');
//    Route::post('school_year_update/{id}','Backend\School_Year_Controller@School_year_update');
//    Route::post('school_year_status/{id}','Backend\School_Year_Controller@school_year_status');
//    Route::get('school_year_delete/{id}','Backend\School_Year_Controller@school_year_delete');

    Route::get('/school_year_list',['as'=>'school_year_list','uses'=>'Backend\School_Year_Controller@show_list','middleware' => ['permission:data-list|data-create|data-edit|data-delete']]);
    Route::get('school_year_create',['as'=>'school_year_create','uses'=>'Backend\School_Year_Controller@create_form','middleware' => ['permission:data-create']]);
    Route::post('school_year_store',['as'=>'school_year_store','uses'=>'Backend\School_Year_Controller@store','middleware' => ['permission:data-create']]);
    Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
    Route::get('school_year_edit/{id}/edit',['as'=>'school_year_edit','uses'=>'Backend\School_Year_Controller@school_year_edit','middleware' => ['permission:data-edit']]);
    Route::patch('school_year_update/{id}',['as'=>'school_year_update','uses'=>'Backend\School_Year_Controller@School_year_update','middleware' => ['permission:data-edit']]);
    Route::delete('school_year_delete/{id}',['as'=>'school_year_delete','uses'=>'Backend\School_Year_Controller@school_year_delete','middleware' => ['permission:data-delete']]);


    Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
    Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
    Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
    Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
    Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
    Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
    Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
});















Route::group(['prefix' => 'supper_admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'human_resources', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'librarian', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'teacher', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'student', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'parent', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'accountant', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});


