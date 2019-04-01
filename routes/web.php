<?php

Route::get('/', function () { //apa yang di url
    return view('welcome'); // apa yang ditampilkan / target
});

//-----------------------//

Route::get('/blog', 'BlogController@index'); 

//create (diletakan sebelum /blog/id agar terbaca terlebih dahulu)
Route::get('/blog/create', 'BlogController@create'); 
Route::post('/blog', 'BlogController@store');

Route::get('/blog/{id}', 'BlogController@show');  

//Update
Route::get('/blog/{id}/edit', 'BlogController@edit'); //tampilan user untuk mengisi form dan mensubmit data / inputan
Route::put('/blog/{id}', 'BlogController@update'); //didapat dari edit.blade.php ketika input bervalue PUT (mengerjakan update dan menetapkan data yang akan diupdate)

//Delete
Route::delete('/blog/{id}', 'BlogController@destroy');