<?php

use App\Http\Controllers\ChartsController;
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

Route::get('/', function () {
    if (Auth::guest()) {   //but here it will work
        return redirect('/login');
    } else {
        return view('evento.index');
    }
});

/*rutas eliminación */
Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('animal/delete/{id}', 'AnimalController@delete')->name('animal.delete');
    Route::get('peso/delete/{id}', 'PesoController@delete')->name('peso.delete');
    Route::get('ordeno/delete/{id}', 'OrdeñoController@delete')->name('ordeno.delete');
    Route::get('listadoen/delete/{id}', 'ListaEnfermedadesController@delete')->name('listadoen.delete');
    Route::get('listadova/delete/{id}', 'ListaVacunasController@delete')->name('listadova.delete');
    Route::get('enfermedades/delete/{id}', 'EnfermedadesController@delete')->name('enfermedades.delete');
    Route::get('vacunas/delete/{id}', 'VacunasController@delete')->name('vacunas.delete');
});

Route::get('clientes/delete/{id}', 'ClienteController@delete')->name('clientes.delete');
Route::get('muertes/delete/{id}', 'MuerteController@delete')->name('muertes.delete');
Route::get('ventas/delete/{id}', 'VentasController@delete')->name('ventas.delete');
Route::get('usuarios/delete/{id}', 'UserController@delete')->name('usuarios.delete');
/*rutas ciclica reproducción*/

Route::get('{id}/embarazo', 'EmbarazoController@create')->name('embarazo.create');
Route::get('{id}/partos', 'PartosController@create')->name('partos.create');
Route::get('{id}/abortos', 'AbortosController@create')->name('abortos.create');
Route::get('{id}/monta', 'MontaController@MontaFracaso')->name('monta.fracaso');


/*rutas PDF*/
Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('muertes/individual/{id}', 'ReportesController@muerteindividual')->name('muerte.individual');
    Route::get('ventas/individual/{id}', 'ReportesController@ventasindividual')->name('ventas.individual');
});
Route::get('animal/individualm/{id}', 'ReportesController@animalreportem')->name('animal.individualm');
Route::get('animal/individualh/{id}', 'ReportesController@animalreporteh')->name('animal.individualh');

Route::get('monta/individual/{id}', 'ReportesController@montaindividual')->name('monta.individual');
Route::get('embarazo/individual/{id}', 'ReportesController@gestacionindividual')->name('embarazo.individual');
Route::get('partos/individual/{id}', 'ReportesController@partoindividual')->name('partos.individual');
Route::get('abortos/individual/{id}', 'ReportesController@abortoindividual')->name('abortos.individual');
Route::get('ordeno/individual/{id}', 'ReportesController@ordeñoindividual')->name('ordeno.individual');
Route::get('peso/individual/{id}', 'ReportesController@pesoindividual')->name('peso.individual');
Route::get('enfermedades/individual/{id}', 'ReportesController@enfermedadesindividual')->name('enfermedades.individual');
Route::get('vacunas/individual/{id}', 'ReportesController@vacunasindividual')->name('vacunas.individual');
Route::get('actividades/individual/{id}', 'ReportesController@actividadesindividual')->name('actividades.individual');
//Rutas get data
Route::get('razas/datos', 'RazaController@datos')->name('razas.datos');
Route::get('listadoen/datos', 'ListaEnfermedadesController@datos')->name('listadoen.datos');
Route::get('listadova/datos', 'ListaVacunasController@datos')->name('listadova.datos');
Route::get('peso/data', 'PesoController@data')->name('peso.data');
Route::get('ordeno/data', 'OrdeñoController@data')->name('ordeno.data');



/*rutas Controllers*/

Route::resource('monta', 'MontaController');
Route::resource('animal', 'AnimalController');
Route::resource('ordeno', 'OrdeñoController');
Route::resource('peso', 'PesoController');
Route::resource('nutricion', 'NutricionController');
Route::resource('enfermedades', 'EnfermedadesController');
Route::resource('vacunas', 'VacunasController');
Route::resource('actividades', 'ActividadesController');
Route::resource('muertes', 'MuerteController');
Route::resource('ventas', 'VentasController');
Route::resource('clientes', 'ClienteController');
Route::resource('razas', 'RazaController');
Route::resource('usuarios', 'UserController');
Route::resource('listadoen', 'ListaEnfermedadesController');
Route::resource('listadova', 'ListaVacunasController');
Route::resource('custom_chart_name', 'ChartsController');


/*rutas Wilson */


Route::get('/estado', [ChartsController::class, 'charts2'])->name('charts');

Route::get('/notificaciones', 'HomeController@notifications')->name('notifications');

Route::get('/notificaciones/{id}', 'HomeController@inotifications')->name('individualmark');

Route::get('/analisis', [ChartsController::class, 'charts'])->name('charts2');

Route::get('markAsRead', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');

/*Rutas ciclicas exepciones*/

Route::resource('embarazo', 'EmbarazoController', ['except' => ['create']]);
Route::resource('partos', 'PartosController', ['except' => ['create']]);
Route::resource('abortos', 'AbortosController', ['except' => ['create']]);
Auth::routes();

/*APIS RETURN*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{id}/vacunas', 'VacunasController@SelectVacunas');
Route::get('{id}/nutricion', 'NutricionController@Calculo');
Route::get('{id}/ordeno', 'OrdeñoController@FechaOrdeño');
Route::get('{id}/actividades', 'ActividadesController@SelectActividades');




//RUTAS CALENDARIO
Route::group(['middleware' => ['auth']], function () {
    Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);
    Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
    Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
    Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
    Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);
    Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
});
