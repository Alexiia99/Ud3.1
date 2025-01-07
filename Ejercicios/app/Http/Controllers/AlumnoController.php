<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // GET /api/alumnos
    public function index()
    {
        return "hola";
        // return response()->json(Alumno::all(), 200);
    }

    // GET /api/alumnos/{id}
    public function show($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        return response()->json($alumno, 200);
    }

    // POST /api/alumnos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:Alumno,email',
        ]);

        $alumno = Alumno::create($validated);

        return response()->json($alumno, 201);
    }

    // PUT /api/alumnos/{id}
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:Alumno,email,' . $id,
        ]);

        $alumno->update($validated);

        return response()->json($alumno, 200);
    }

    // DELETE /api/alumnos/{id}
    public function destroy($id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json(['message' => 'Alumno no encontrado'], 404);
        }

        $alumno->delete();

        return response()->json(['message' => 'Alumno eliminado correctamente'], 200);
    }
}
