<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventana;

class VentanasController extends Controller
{
    public function index()
    {
        $ventanas = Ventana::all();
        return view('ventanas.index', compact('ventanas'));
    }

    public function create()
    {
        return view('ventanas.create');
    }

    // Métodos restantes para almacenar, mostrar, editar y eliminar ventanas...
}
