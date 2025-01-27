<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'AuthController@login');
});

Route::group(['prefix' => 'cidades'], function () {
    Route::get('/{nome?}', 'CidadeController@listar');
    Route::get('/{cidadeId}/medicos/{nome?}', 'MedicoController@listarPorCidade');
});

Route::group(['prefix' => 'medicos'], function () {
    Route::get('/{nome?}', 'MedicoController@listar');
});

Route::group(['middleware' => 'auth:api'], function () {

    Route::group(['prefix' => 'cidades'], function () {
        Route::post('/{cidadeId}/medicos/cadastrar', 'MedicoController@cadastrar');
    });
});
