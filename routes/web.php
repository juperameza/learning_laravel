<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Laravel 10 tiene grupos de rutas
Route::get('/', HomeController::class);

Route::controller(ContactController::class)->group( function(){
    Route::get('contacts',  'index');
    Route::get('contacts/create',  'create');
    Route::get('contacts/{contact}/{category?}', 'show');
});

//Las rutas se leen de arriba hacia abajo, por lo que si se coloca una ruta que ya existe, se sobreescribe
//se puede usar mas de un parametro en las rutas
//Y estas pueden ser opcionales
