<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function procesar(Request $request)
    {
        $nombre = $request->input('nombre'); // Atrapa lo que escribieron en "nombre" [cite: 1183]
        $email = $request->input('email');   // Atrapa lo que escribieron en "email" [cite: 1184]

        return view('exito', [
            'nombre' => $nombre,
            'email' => $email
        ]); // Le manda esos datos a la vista de éxito [cite: 1188, 1189, 1190]
    }
}
