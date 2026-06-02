<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductoController; //mi ruta de mi examen 

// 1. Ruta de Inicio lab
Route::get('/', [Controller::class, 'inicio'])->name('inicio');

// 2. Ruta Sobre Mí lab
Route::get('/sobre-mi', [Controller::class, 'sobreMi'])->name('sobre-mi');

// 3. Ruta de Materias lab
Route::get('/materias', [Controller::class, 'materias'])->name('materias');

// 4. Ruta de Contacto GET para cargar la vista lab
Route::get('/contacto', [Controller::class, 'contacto'])->name('contacto');

// 5. Ruta de Contacto POST para recibir el formulario lab
Route::post('/contacto', [Controller::class, 'contacto']);

// 6. Ruta para el examen de Productos 
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');