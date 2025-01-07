<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all(); // Devuelve todas las notas
    }

    public function show($id)
    {
        return Nota::findOrFail($id); // Devuelve la nota con el ID proporcionado
    }

    public function store(Request $request)
    {
        $nota = Nota::create($request->all()); // Crea una nueva nota
        return response()->json($nota, 201);
    }

    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all()); // Actualiza la nota con el ID especificado
        return response()->json($nota, 200);
    }

    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete(); // Elimina la nota con el ID especificado
        return response()->json(null, 204);
    }
}
