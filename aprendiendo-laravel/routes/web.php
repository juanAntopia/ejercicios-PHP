<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "<h1>Hola Mundo desde laravel</h1>";
});

/**
 * GET: Conseguir datos
 * POST: Guardar datos
 * PUT: actualizar recursos
 * DELETE: eliminar
 */

 Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
 });

 Route::get('/pelicula/{titulo}/{year?}', function($titulo = "No hay pelicula seleccionada", $year = 2019){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
 })->where(array(
     'titulo' => '[a-zA-Z\s]+',//condiciones a las rutas
     'year' => '[0-9]+'//condiciones a las rutas
 ));

 Route::get('/listado-peliculas', function(){
    $titulo = "Listado de peliculas";
    $listado = array('batman', 'spider-man', 'hachiko');

    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
 });

 Route::get('/pagina-generica', function(){
    return view('pagina-generica');
 });