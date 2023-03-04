<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "Root page";
});

Route::get('/about', function () {
    return "About page";
});

//Las rutas se leen de arriba hacia abajo, por lo que si se coloca una ruta que ya existe, se sobreescribe
Route::get('/contact/create', function () {
    return "Create contact";
});
//se puede usar mas de un parametro en las rutas
//Y estas pueden ser opcionales
Route::get('/contact/{contact}/{category?}', function ($contact, $category = null) {
   if($category){
       return "Contact: $contact, Category: $category";
    }else{
        return "Contact: $contact";
    }
    //esto se deberia manejar en los controladores
});

