<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;

use App\Models\Event;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/chirps', function () {
    return view('chirps.index');
}) -> name('chirps.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/empleado', function(){
        return view('empleado.index');
    })->name('empleado.index');
    //rutas para guardar
    Route::get('/empleado',[EmpleadoController::class,'index'])->name('empleado.index');

    //rutas con nombre empleado
    Route::post('/empleado', [EmpleadoController::class,'store'])->name('empleado.store');

    //ruta para editar los datos
    Route::get('/editempleado/{id}',[EmpleadoController::class,'edit'])->name('editempleado.index');

    //ruta para actualizar los datos
    Route::put('/updatempleado/{id}',[EmpleadoController::class,'update'])->name('updatempleado.update');

    //ruta para eliminar un empleado
    Route::delete('/deleteempleado/{id}', [EmpleadoController::class,'destroy'])->name('deleteempleado.destroy');

    // calendario
    Route::get('/eventos', function() {
        return Event::all();
    });
    
    Route::get('/agendacita', function(){
        return view('agendacita.index');
    })->name('agendacita.index');
    Route::get('/citasagendadas', function(){
        return view('citasagendadas.index');
    })->name('citasagendadas.index');

    //rutas para listar los empleados
    Route::get('/listaempleado',[EmpleadoController::class,'show'])->name('listaempleado.index');
    
});

require __DIR__.'/auth.php';
