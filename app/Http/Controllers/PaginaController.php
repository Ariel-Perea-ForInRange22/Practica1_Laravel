<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Muestra la página de bienvenida estática
     *
     * @return \Illuminate\View\View
     */
    public function bienvenida()
    {
        return view('bienvenida');
    }

    /**
     * Muestra un saludo personalizado con el nombre del usuario
     *
     * @param string $nombre
     * @return \Illuminate\View\View
     */
    public function saludo($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
