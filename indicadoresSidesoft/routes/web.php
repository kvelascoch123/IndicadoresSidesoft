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

Route::get('indicadoresTecnicos','DeveloperController@indicadoresTecnicos');
Route::get('indicadoresFuncionales','ConsultantsController@indicadoresFuncionales');
Route::get('indicadoresSoporte','SupportController@indicadoresSoporte');
Route::get('ranking','RankingController@rankingBacklogs');

Route::get('/','DeveloperController@indicadoresTecnicos')->name('page.index');


//Administrador
Route::get('/administrador','AdminController@getPage')->name('page.admin');

// backlogs
Route::post('backlog/create','AdminController@crearBacklog')->name('backlog.create');
Route::post('backlog/searchByUser','AdminController@searchBacklogByUser')->name('backlog.search');
Route::get('backlog_year/{idbakclog}/edit/{idUser}','AdminController@editBacklogYear')->name('backlog.edit');
Route::post('backlog_year/editConfirmar/{idBacklog}','AdminController@editConfirmar')->name('backlog.editConfirmar');


Route::post('codigo/admin', 'AdminController@accesCodeSidesoft')->name('backlog.admin'); 
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// GESTION USUARIOS
Route::get('users', 'UsuariosController@showPageGestionUsers')->name('user.index');
Route::post('users/register', 'UsuariosController@registrarUsuarios')->name('usuario.register');

// GESTION DE POLITICAS
Route::get('allPolitics','PoliticsController@getPage');
Route::get('addToCalification/{idPolitica}','PoliticsController@addToCalification');
Route::post('addBacklogYearPolitics','PoliticsController@addBacklogYearPolitics')->name('politics.qualification');
Route::get('getBaklogYear/{id_backlog_year}/politics/{id_backlog}/{id_user}/{id_area}','PoliticsController@getPoliticsDetails');
