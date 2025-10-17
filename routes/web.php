<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/data', function () {
    return view('data');
});


//data
Route::get('/data/allData', 'App\Http\Controllers\DataController@showAllData');
Route ::get('/data/all/{id}/delete','App\Http\Controllers\DataController@delete');
Route ::get('/data/all/{id}','App\Http\Controllers\DataController@details');
Route ::get('/data/all/{id}/edit','App\Http\Controllers\DataController@edit');
Route ::get('/data/darbu/{id}/edit','App\Http\Controllers\DarbController@Dedit');
Route ::post('/data/all/{id}','App\Http\Controllers\DataController@editSubmit');

//darbinieki
Route ::get('/data/allDarbinieks', 'App\Http\Controllers\DarbController@showAllDarbinieks');
Route ::get('/data/darbu/{id}/delete','App\Http\Controllers\DarbController@Darbiniekudelete');
Route ::get('/data/darbu/{id}/details','App\Http\Controllers\DarbController@Darbiniekudetails');
Route ::get('/data/darbu/{id}/edit','App\Http\Controllers\DarbController@Dedit');
Route ::post('/data/darbu/{id}','App\Http\Controllers\DarbController@DeditSubmit');


//Amats
Route::get('/data/allAmats','App\Http\Controllers\AmatsController@showALLAmats');
Route::get('/data/amats/{id}/details','App\Http\Controllers\AmatsController@AmatsDetails');
Route::get('/data/amats/{id}/delete','App\Http\Controllers\AmatsController@AmatsDelete');
Route::get('/data/amats/{id}/edit','App\Http\Controllers\AmatsController@AmatsEdit');
Route ::post('/data/amats/{id}','App\Http\Controllers\AmatsController@AmatseditSubmit');
//Kontakti

//Login
//Route::post('/loginp', 'App\Http\Controllers\AmatsController')

Route::get('/data/newsubmit', function(){
    return dd(Request::all());
});