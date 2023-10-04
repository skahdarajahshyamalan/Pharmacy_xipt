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
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/Prescription', 'PrescriptionController@index')->name('Prescription');
    Route::post('/uploadPrescription', 'PrescriptionController@uploadPrescription')->name('upload.uploadPrescription');
});


Route::group(['middleware' => ['auth', 'permission']], function() {
       Route::get('/Things', 'PrescriptionController@Thingsindex')->name('Things');
       Route::get('/Thingseditshow/{id}', 'PrescriptionController@Thingseditshow')->name('things.Thingseditshow');
       Route::post('/InviceSend', 'InviceController@InviceSend')->name('InviceSend');
});
