<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\bunga_indukuserController@index');
    Route::get('indukuser', 'App\Http\Controllers\bunga_indukuserController@index');
    
    Route::get('indukuser/tambah', 'App\Http\Controllers\bunga_indukuserController@tambah');
    Route::post('indukuser/tambah_proses', 'App\Http\Controllers\bunga_indukuserController@tambah_proses');
    Route::get('indukuser/edit/{id}', 'App\Http\Controllers\bunga_indukuserController@edit');
    Route::post('indukuser/edit_proses', 'App\Http\Controllers\bunga_indukuserController@edit_proses');
    Route::get('indukuser/delete/{id}', 'App\Http\Controllers\bunga_indukuserController@delete');
    


