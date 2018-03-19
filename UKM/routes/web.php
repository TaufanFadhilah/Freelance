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
    return redirect()->route('home');
});

Route::middleware(['auth'])->group(function () {

  Route::get('/home', 'HomeController@index')->name('home');

  //Estimation
  Route::get('/estimation','EstimationController@create')->name('Estimation');
  Route::post('/estimation/{Estimation}','EstimationController@update')->name('update.Estimation');

  //UKM
  Route::get('/UKM','UKMController@index')->name('listAll.UKM');
  Route::get('/UKM/{cat}','UKMController@ShowCat')->name('list.UKM');
  Route::get('/addUKM','UKMController@create')->name('add.UKM');
  Route::post('/addUKM','UKMController@store')->name('create.UKM');
  Route::get('/deleteUKM/{UKM}','UKMController@destroy')->name('delete.UKM');
  Route::get('/detailUKM/{UKM}','UKMController@show')->name('detail.UKM');
  Route::get('/profilUKM/{cat}','UKMController@profil')->name('profil.UKM');
  Route::post('/editUKM/{UKM}','UKMController@update')->name('update.UKM');
  Route::get('/isValid/{UKM}','UKMController@setValid')->name('isValid.UKM');

  //Marketing
  Route::post('/editMarketing/{UKM}','MarketingController@update')->name('update.Marketing');

  //Production
  Route::post('/editProduction/{UKM}','ProductionController@update')->name('update.Production');

  //Value Proposition
  Route::post('/editVP/{UKM}','ValueProporsitionController@update')->name('update.VP');

  //Partner
  Route::post('/editPartner/{UKM}','PartnerController@update')->name('update.Partner');

  //Finance
  Route::post('/finance/{UKM}','FinanceController@update')->name('finance.update');

});
Auth::routes();
