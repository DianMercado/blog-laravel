<?php

use Illuminate\Support\Facades\Route;

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

//EJERCICIO 1
Route::get('/', function () {
    return view('welcome');
});

Route::get("/mi_primer_ruta",function(){
    return "Hola Diana";
});

Route::get("/name/{name}",function($name){
    return "hola soy ".$name;
});

Route::get("/name/{name}/lastname/{apellido}",
function($name,$apellido){
    return "hola soy ".$name." ".$apellido;
});

Route::get("name/{name}/lastname/{apellido?}",
function($name,$apellido=null){
    return "hola soy ".$name." ".$apellido;
});

Route::get("name/{name}/lastname/{apellido?}",
function($name,$apellido="apellido"){
    return "hola soy ".$name." ".$apellido;
});

Route::get("/1er/{num}/2do/{num2}",
function($num,$num2){
    $resultado=$num+$num2;
    return "La suma es ".$resultado;
});

//EJERCICIO 2
Route::get("/login",function(){
    return view("login");
});

//EJERCICIO 3
Route::get("/logout",function(){
    return "Logout Usuario";
});

//EJERCICIO 4
Route::get("/catalog",function(){
    return "Listado Peliculas";
});

//EJERCICIO 5
Route::get("/catalog/show/{id}",
function($id){
    return "Vista Detalle Pelicula {id}";
});

//EJERCICIO 6
Route::get("/catalog/create",function(){
    return "Añadir Pelicula";
});

//EJERCICIO 7
Route::get("/catalog/edit/{id}",
function($id){
    return "Modificar Pelicula {id}";
});

Route::get("/rutaprueba","PruebaController@prueba2");

Route::resource("/trainers","TrainerContrller");
Route::get("delete/{id}","TrainerContrller@destroy");
Route::get("descargar-entrenadores", 'TrainerContrller@pdf')->name('listado.pdf');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("/search","Api\SearchController");
Route::get("/search1",['uses'=>"Api\SearchController@buscar","as"=>"Buscar"]);