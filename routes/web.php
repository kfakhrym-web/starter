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


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/Not-Adaults', function(){
    return 'not allowed enter less than 15';
})->name('Not-Adaults');


    Auth::routes();
    Route::get('home','HomeController@index')->name('home');

    Route::get('redirect/{service}','SocialController@redirect');
    Route::get('callback/{service}','SocialController@callback');
    Route::get('fillable','CrudController@getOffers');
    Route::get('fillable2','CrudController@getOffers2');


    Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){

    Route::group(['prefix' => 'offers'],function(){
        Route::get('create','CrudController@create');
        Route::post('store','CrudController@store');
        Route::get('edit/{offer_id}','CrudController@editOffer');
        Route::post('update/{offer_id}','CrudController@UpdateOffer');
        Route::get('delete/{offer_id}','CrudController@deleteOffer')->name('offers.delete');
        Route::get('all','CrudController@getAllOffers')->name('offers.all');
      });
    Route::get('youtube','CrudController@getVideo')->middleware('auth');
    });

    //////////////////////////////// Begin Ajex section /////////////////////////////
 Route::group(['prefix' => 'ajax-offers'],function(){
     Route::get('create','OfferController@create');
     Route::post('store','OfferController@saveOffer')->name('ajex.offers.save');
     Route::get('all','OfferController@show')->name('ajex.offers.all');
     Route::post('delete','OfferController@delete')->name('ajax.offers.delete');
     Route::get('edit/{id}','OfferController@edit')->name('ajax.offers.edit');
     Route::post('update','OfferController@Update')->name('ajax.offers.update');

 });


   //////////////////////////////// End Ajex section /////////////////////////////
  //////////////////////////////// Begin Authentication and Guards section ///////////////////////////
     Route::group(['namespace' => 'Auth','middleware' => 'CheckAge'],function(){
     Route::get('adualts','CustomAuthController@adualts')->name('adualts');
     });

     Route::get('site','Auth\CustomAuthController@site')->middleware('auth:web')->name('site');
     Route::get('Admin','Auth\CustomAuthController@admin')->middleware('auth:admin')->name('admin');
     Route::get('Admin/login','Auth\CustomAuthController@adminLogin')->name('admin-login');
     Route::post('Admin/login','Auth\CustomAuthController@checkadminLogin')->name('save.admin.login');
 //////////////////////////////// End Authentication and Guards section ///////////////////////////

 //////////////////////////////// Start relations routes ////////////////////////////////
         ///////////////////// one to one /////////////////////////
  Route::group(['namespace' => 'Relations'],function(){
   Route::get('has-one','HasOneController@hasOneRelation');
   Route::get('has-one-reverse','HasOneController@hasOneRelationReverse');
   Route::get('user-has-phone','HasOneController@UserHasPhone');
   Route::get('user-has-not-phone','HasOneController@UserNotHasPhone');
   Route::get('user-has-phone-condition','HasOneController@UserHasPhoneWithCondition');

        ///////////////////// one to many /////////////////////////
   Route::get('hospital-has-many','HasManyController@getHospitalDoctors');
   Route::get('hospitals','HasManyController@hospitals');
   Route::get('doctors/{hospital_id}','HasManyController@doctors')->name('hospitals.doctors');

   Route::get('hospitals-has-doctors','HasManyController@hospitalsHasDoctors');
   Route::get('hospitals-has-doctors-male','HasManyController@hospitalsHasDoctorsMale');
   Route::get('hospitals-not-has-doctors','HasManyController@hospitalsNotHasDoctors');

 //////////////////////////////// End relations routes //////////////////////////////////
  });
