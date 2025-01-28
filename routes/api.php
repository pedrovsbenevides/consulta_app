<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', 'AuthController@login');
});

Route::group(['prefix' => 'cidades'], function () {
    Route::get('/', 'CidadeController@listar');
    Route::get('/{cidadeId}/medicos', 'MedicoController@listarPorCidade');
});

Route::group(['prefix' => 'medicos'], function () {
    Route::get('/', 'MedicoController@listar');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/user', 'AuthController@me');

    Route::group(['prefix' => 'medicos'], function () {
        Route::post('/', 'MedicoController@cadastrar');
        Route::post('/consulta', 'ConsultaController@agendar');
        Route::get('{medicoId}/pacientes', 'PacienteController@listarPorMedico');
    });

    Route::group(['prefix' => 'pacientes'], function () {
        Route::post('/', 'PacienteController@cadastrar');
        Route::put('/{pacienteId}', 'PacienteController@atualizar');
    });
});
