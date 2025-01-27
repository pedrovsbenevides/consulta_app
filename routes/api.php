<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'AuthController@login');
});

Route::group(['prefix' => 'cidades'], function () {
    Route::get('/{nome?}', 'CidadeController@listar');
});
