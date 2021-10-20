<?php

use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\MiCuentaController;
use Illuminate\Support\Facades\Route;


Route::group([
        'prefix' => 'admin',
        'middleware' => ['auth', 'superadministrador']], 
        function(){
            Route::resource('mi-cuenta', MiCuentaController::class);

            Route::get('menu', [MenuController::class, 'index'])->name('menu');
            Route::get('menu/crear', [MenuController::class, 'create'])->name('menu.crear');
            Route::get('menu/{id}/editar', [MenuController::class, 'edit'])->name('menu.editar');
            Route::post('menu', [MenuController::class, 'store'])->name('menu.guardar');
            Route::post('menu/guardar-orden', [MenuController::class, 'show'])->name('menu.orden');
            Route::put('menu/{id}', [MenuController::class, 'update'])->name('menu.actualizar');
            Route::delete('menu/{id}/eliminar', [MenuController::class, 'destroy'])->name('menu.eliminar');

});