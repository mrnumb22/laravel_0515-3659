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
});

Route::get('/foo', function(){
    return view('foo');
})->name('foo');

Route::get('/bar', function(){
    return view('bar');
})->name('bar');

// ASSIGNMENT

Route::get('/a-method/{operator}/{text1}/{text2}', function($operator, $text1, $text2){
    return view ('a-method', array('operator' => $operator,'text1' => $text1, 'text2' => $text2));
})->name('a-method');

// July 30, 2018

Route::get('/middleware/{age}', function($age){
    return view ('age', array('age'=>$age));
})->middleware('age');

Route::get('/pages/contact',
           'PagesController@contactPage');

Route::get('/pages/middleware/{age}',
            'PagesController@middlewareAgePage');

Route::get('/working/{param}', function($param){
    $var = "It's Working!";
    return view('param', array('param' => $param, 'var' => $var));
})->name('Parameters');

// CRUSHES (CRUD)

Route::get('/crushes', 'CrushesController@index')->name('crushes.index');

// ADDING IN RECORD

Route::get('/crushes/create', 'CrushesController@create')->name('crushes.create');

Route::post('/crushes/store', 'CrushesController@store')->name('crushes.store');


// EDITING RECORD 

Route::get('/crushes/{id}/edit', 'CrushesController@edit')->name('crushes.id.edit');

Route::post('/crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');

// DELETING RECORD

Route::get('/crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');

// SHOWING RECORD 

Route::get('/crushes/{id}/show', 'CrushesController@show')->name('crushes.id.show');

// ADD QUALITIES

Route::get('/crushes/{id}/addqualities', 'QualitiesController@create')->name('crushes.id.addqualities');

Route::post('/crushes/{id}/store', 'QualitiesController@store')->name('crushes.id.store');
