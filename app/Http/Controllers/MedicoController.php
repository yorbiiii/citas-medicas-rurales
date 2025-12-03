<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function dashboard()
    {
        return view('medico.dashboard');
    }

    public function citasDelDia()
    {
        $citas = [
            ['paciente' => 'Juan Pérez', 'hora' => '09:00 AM', 'estado' => 'Pendiente'],
            ['paciente' => 'María López', 'hora' => '10:30 AM', 'estado' => 'Pendiente'],
            ['paciente' => 'Carlos Ruiz', 'hora' => '02:00 PM', 'estado' => 'Pendiente'],
        ];

        return view('medico.citas', compact('citas'));
    }

    public function historial()
    {
        $historial = [
            ['paciente' => 'Ana Torres', 'fecha' => '2024-11-10', 'diagnostico' => 'Gripe'],
            ['paciente' => 'Luis Ponce', 'fecha' => '2024-12-01', 'diagnostico' => 'Tos crónica'],
        ];

        return view('medico.historial', compact('historial'));
    }

    public function horarios()
    {
        $horarios = [
            ['dia' => 'Lunes', 'inicio' => '08:00', 'fin' => '12:00'],
            ['dia' => 'Miércoles', 'inicio' => '09:00', 'fin' => '13:00'],
        ];

        return view('medico.horarios', compact('horarios'));
    }

    public function guardarHorario(Request $request)
    {
        return back()->with('success', 'Horario registrado correctamente (modo demo).');
    }

    public function teleconsulta($id)
    {
        return view('medico.teleconsulta', compact('id'));
    }
}