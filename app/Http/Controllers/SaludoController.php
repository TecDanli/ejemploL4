<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    //

    public function escribirSaludo() {
        /* Leer algo de la BD*/
        /* Condición para verificar algo */
        /* asignar variables */
        return view('saludo');
    }
}
