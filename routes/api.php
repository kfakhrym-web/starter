<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1','namespace' => 'Api','middleware' => 'api.key'],function(){


    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');

    // --- 2. المسارات المحمية (Protected Routes) ---
    // هنا نستخدم Middleware Sanctum للتأكد من وجود التوكن
    Route::group(['middleware' => 'auth:sanctum'],function(){
        
        // عرض بيانات البروفايل للمستخدم المسجل حالياً
        Route::get('/profile', 'AuthController@profile');

        // تحديث بيانات البروفايل (الاسم، التليفون، الصورة)
        Route::post('/profile/update', 'UserController@updateProfile');
        
        // تسجيل الخروج وإبطال التوكن
        Route::post('/logout', 'UserController@logout');
        
    });

});


