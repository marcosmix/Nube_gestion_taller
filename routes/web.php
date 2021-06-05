
<?php
use Illuminate\Support\Facades\Route;  /* Agregar en caso de salir error de Intelephense 
muestra error innecesario en clase route como no definida*/


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

//ruta principal
Route::get('/','indexController@getIndex');

//rutas desarrolladores
Route::get('programadores', 'ProgamadoresController@getDevelopers');

//rutas cliente 
Route::get('clientes','clientesController@indexCliente');
Route::get('infocliente','infoClienteController@infoCliente');
Route::get('editarcliente','editarClienteController@editarCliente');

