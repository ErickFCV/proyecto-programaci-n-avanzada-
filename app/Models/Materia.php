<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    // Permitimos que Laravel inserte datos en estas columnas de la BD
    protected $fillable = ['nombre', 'codigo', 'creditos', 'nota_obtenida'];

    // Getters para acceder a las columnas de la Base de Datos
    public function getNombre(): string { return $this->nombre; }
    public function getCodigo(): string { return $this->codigo; }
    public function getCreditos(): int { return $this->creditos; }
    public function getNota(): float { return $this->nota_obtenida; }

    // Métodos de negocio para las notas de aprobación (51)
    public function estaAprobada(): bool { return $this->nota_obtenida >= 51; }

    public function getEstado(): string
    {
        if ($this->nota_obtenida >= 86) return 'Excelente';
        if ($this->nota_obtenida >= 71) return 'Bueno';
        if ($this->nota_obtenida >= 51) return 'Aprobado';
        return 'Reprobado';
    }

    public function getColorEstado(): string
    {
        return match (true) {
            $this->nota_obtenida >= 86 => '#d4edda', // Verde claro
            $this->nota_obtenida >= 71 => '#d1ecf1', // Azul claro
            $this->nota_obtenida >= 51 => '#fff3cd', // Amarillo claro
            default => '#f8d7da',                    // Rojo claro
        };
    }
}