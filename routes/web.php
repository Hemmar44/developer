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



Auth::routes();

Route::get('/home', 'HomeController@index');
//main site and news
Route::get('/', 'NewsController@show');
Route::get('news/{news}', 'NewsController@showNews');

//admin area
Route::get('/admin', function(){
	return view('admin.admin');
})->middleware('auth');

Route::get('/addNews', 'NewsController@addNews');
Route::post('/storeNews', 'NewsController@storeNews');
Route::get('/selectNews', 'NewsController@selectNews');
Route::post('/editNews', 'NewsController@selectNewsToEdit');
Route::post('/saveChangedNews', 'NewsController@saveChangedNews');


Route::get('/addOffer', 'OffersController@addOffer');
Route::post('/storeOffer', 'OffersController@storeOffer');
Route::get('/offersList', 'OffersController@offersList');
Route::get('/offersList/{offer}', 'OffersController@offerToEdit');
Route::post('/storeUpdatedOffer', 'OffersController@storeUpdatedOffer');

Route::get('/addPicture', 'PicturesController@addPicture');
Route::get('/selectPicture', 'PicturesController@selectPicture');
Route::post('/storePicture', 'PicturesController@storePicture');
Route::post('deletePicture', 'PicturesController@selectPicturesToRemove');
Route::post('confirmRemove', 'PicturesController@confirmRemove');

Route::post('/storeReservation', 'ReservationsController@storeReservation');
Route::get('/reservationsList', 'ReservationsController@reservationsList');



Route::get('/editOffer', function(){
	return view('admin.editoffer');
});




Route::get('/OgrodySzczepankowa', 'OffersController@showOgrody');
Route::get('/lokalizacjaSzczepankowo', function(){
	return view('lokalizacjaSzczepankowo');
});

Route::get('/WillaSzachty', 'OffersController@showWilla');
Route::get('/lokalizacjaSzachty', function(){
	return view('lokalizacjaSzachty');
});

Route::get('/onas', function() {
	return view('onas');
});



Route::get('/Tyniecka', function(){
	return view('tyniecka');
});

Route::get('/kontakt', function(){
	return view('kontakt');
});
