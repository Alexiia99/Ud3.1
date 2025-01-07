<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all(); // Devuelve todas las asignaturas
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id); // Devuelve la asignatura con el ID proporcionado
    }

    public function store(Request $request)
    {
        $asignatura = Asignatura::create($request->all()); // Crea una nueva asignatura
        return response()->json($asignatura, 201);
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update($request->all()); // Actualiza la asignatura con el ID especificado
        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete(); // Elimina la asignatura con el ID especificado
        return response()->json(null, 204);
    }
}
