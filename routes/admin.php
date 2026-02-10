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

Route::get('/admin', function () {
    return view('landing');
});


// Route::prefix('admin')->group(function(){

// Route::get('/', function(){
//     return "Hello Admin";
// });
// Route::get('show', 'AdminController@showAdminName');
// Route::delete('delete', 'AdminController@showAdminName');
// Route::get('edit', 'AdminController@showAdminName');
// Route::post('update', 'AdminController@showAdminName');

// });

// Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
// // set of functions
// Route::get('/', function(){
//     return "Hello Admin";
// });

// Route::get('show', 'AdminController@showAdminName');
// Route::delete('delete', 'AdminController@showAdminName');
// Route::get('edit', 'AdminController@showAdminName');
// Route::post('update', 'AdminController@showAdminName');

// });

// Route::get('/user',function(){
// return "Welcome User";
// })->middleware('auth');

// Route::group(['namespace' => 'Front'],function(){
// Route::get('First0','FirstController@showString0')->middleware('auth');
// Route::get('First1','FirstController@showString1');
// Route::get('First2','FirstController@showString2');
// Route::get('First3','FirstController@showString3');
// });

// Route::get('login',function(){
// return "Must be login ,please";
// })->name('login');


Route::resource('news','Front\NewsController');


//resource
Route::get('news','Front\NewsController@index');
Route::post('news','Front\NewsController@store');
Route::get('news/create','Front\NewsController@create');
Route::get('news/{id}','Front\NewsController@show');
Route::get('news/{id}','Front\NewsController@update');
Route::delete('news/{id}','Front\NewsController@destroy');
Route::get('news/{id}/edit','Front\NewsController@adit');

// Route::get('show',function(){
// return view('welcome')->with(['Name' => 'Kerolos Fakhry','Age' => 21]);
// });

// Route::get('show','Front\AdminController@showData');

// Route::get('index','Front\AdminController@getIndex');