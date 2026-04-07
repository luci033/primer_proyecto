<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'procesar']);


?>
