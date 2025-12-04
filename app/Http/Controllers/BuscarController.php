<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Especialidad;

class BuscarController extends Controller
{
    public function index(Request $request)
    {
        $especialidades = Especialidad::all();
        
        $medicosQuery = Medico::with(['user', 'especialidad']);

        if ($request->filled('especialidad_id')) {
            $medicosQuery->where('especialidad_id', $request->input('especialidad_id'));
        }

        if ($request->filled('nombre')) {
            $nombre = $request->input('nombre');
            $medicosQuery->whereHas('user', function ($query) use ($nombre) {
                $query->where('name', 'like', '%' . $nombre . '%');
            });
        }
        
        $medicos = $medicosQuery->paginate(10); 

        $filters = $request->only('especialidad_id', 'nombre');
        
        return view('buscar.index', compact('medicos', 'especialidades', 'filters'));
    }
}