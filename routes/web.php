
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

Route::get('/','indexController@getIndex');

/*************************************************************/
Route::get('clientes','clientesController@indexCliente');
/* Creamos una Ruta en donde en el primer parametro contiene el nombre de
la ruta que seria clientes, luego en el segundo parametro contiene un
controlador llamado clientesController que va apuntar mediante arroba @ al 
metodo llamado listadoCliente. (ambos parametros deben envolverse con comilla simples) */

 
Route::get('infocliente','infoClienteController@infoCliente');
Route::get('editarcliente','editarClienteController@editarCliente');
