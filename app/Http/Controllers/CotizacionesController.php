<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacion;

class CotizacionesController extends Controller
{
    public function index()
    {
        $cotizaciones = Cotizacion::all();
        return view('cotizaciones.index', compact('cotizaciones'));
    }

    public function create()
    {
        return view('cotizaciones.create');
    }

    public function store(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            // Agrega aquí las reglas de validación para los campos del formulario
        ]);

        // Crear una nueva cotización en la base de datos
        Cotizacion::create($request->all());

        // Redireccionar a la página de listado de cotizaciones
        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotización creada exitosamente.');
    }

    public function show($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view('cotizaciones.show', compact('cotizacion'));
    }

    public function edit($id)
    {
        $cotizacion = Cotizacion::findOrFail($id);
        return view('cotizaciones.edit', compact('cotizacion'));
    }

    public function update(Request $request, $id)
    {
        // Validar datos del formulario
        $request->validate([
            // Agrega aquí las reglas de validación para los campos del formulario
        ]);

        // Actualizar la cotización en la base de datos
        Cotizacion::findOrFail($id)->update($request->all());

        // Redireccionar a la página de listado de cotizaciones
        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotización actualizada exitosamente.');
    }

    public function destroy($id)
    {
        // Eliminar la cotización de la base de datos
        Cotizacion::findOrFail($id)->delete();

        // Redireccionar a la página de listado de cotizaciones
        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotización eliminada exitosamente.');
    }
}
