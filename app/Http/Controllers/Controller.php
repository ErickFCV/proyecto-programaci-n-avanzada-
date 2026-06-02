<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Materia; // <-- Conexión al Modelo de la BD

class Controller extends BaseController
{
    public function inicio()
    {
        return view('inicio', [
            'nombre'   => 'Erick Fernando Condori Valda',
            'carrera'  => 'Ingeniería de Sistemas',
            'semestre' => 'Quinto semestre',
            'año'      => date('Y'),
        ]);
    }

    public function sobreMi()
    {
        $habilidades = [
            'PHP'        => 75,
            'HTML/CSS'   => 90,
            'JavaScript' => 60,
            'Laravel'    => 55,
            'GIT'        => 70,
        ];

        return view('sobre-mi', [
            'nombre'      => 'Erick Fernando Condori Valda',
            'carrera'     => 'Ingeniería de Sistemas',
            'semestre'    => 'Quinto semestre',
            'habilidades' => $habilidades,
        ]);
    }

    // Método migrado a Base de Datos Real
    public function materias()
    {
        // Trae las materias desde SQLite usando Eloquent
        $materias = Materia::all();

        // Operaciones usando los métodos del modelo
        $promedio = round($materias->avg(fn(Materia $m) => $m->getNota()) ?? 0, 2);
        $aprobadas = $materias->filter(fn(Materia $m) => $m->estaAprobada())->count();

        return view('materias', compact('materias', 'promedio', 'aprobadas'));
    }

    public function contacto()
    {
        return view('contacto');
    }
}