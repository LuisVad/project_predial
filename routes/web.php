<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::post('/index', function () {
    return view('src/index');
})->name('src.index');

Route::get('/consulta_predios', function () {
    return view('src.predial.consulta_predios'); // Especifica la carpeta 'predial'
})->name('consulta_predios');


Route::get('/modificacion_predios', function () {
    return view('src.predial.modificacion_predios'); // Especifica la carpeta 'predial'
})->name('modificacion_predios');

Route::get('/rezagos', function () {
    return view('src.gestion.rezagos'); // Especifica la carpeta 'predial'
})->name('rezagos');

Route::get('/recibos_predial', function () {
    return view('src.cobranza.recibos_predial'); // Especifica la carpeta 'predial'
})->name('recibos_predial');