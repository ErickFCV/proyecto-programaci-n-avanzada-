<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        // 1. Array con 5 productos con valores enteros y campo extra 'stock' [cite: 19, 23, 24]
        $productos = [
            ['nombre' => 'Laptop HP', 'precio' => 4500, 'stock' => 10],
            ['nombre' => 'Mouse Logi', 'precio' => 150, 'stock' => 25],
            ['nombre' => 'Teclado Mecánico', 'precio' => 380, 'stock' => 15],
            ['nombre' => 'Monitor 24"', 'precio' => 1200, 'stock' => 8],
            ['nombre' => 'Audífonos Gamer', 'precio' => 250, 'stock' => 12],
        ];

        // 2. Calcular el precio promedio sumando los precios y dividiendo entre el total [cite: 25]
        $totalPrecios = 0;
        foreach ($productos as $producto) {
            $totalPrecios += $producto['precio'];
        }
        $precioPromedio = $totalPrecios / count($productos);

        // 3. Pasar las variables correspondientes a la vista 'productos' [cite: 26]
        return view('productos', compact('productos', 'precioPromedio'));
    }
}