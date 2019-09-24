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
//    return view('hello');



// });
// Route::get('/about', function () {//เรียก พาทไปที่ พาท about
//     return view('statics.about');
// });
// Route::get('/name/{surname}', function () {
//     return view('statics.name')
//     ->with (['name'=>'aphisit', 'surname'=>'jeamjuankhaw']);//เรียกตัวแปร name และ surname
    
// });
// Route::get('/name/{surname?}', function ($surname='jeamjuankhaw') {
//     return view('statics.name')
//     ->with(['surname'=>$surname]);
    
    
// });



Route::get('/','staticController@hello');
Route::get('/about','staticController@about');
route::get('/name/{surname?}','staticController@surname');

route::get('/customer','CustomerController@index');
route::post('/customer','CustomerController@store');
route::get('/customer/create','CustomerController@create');
route::get('/customer/{id}','CustomerController@show');
