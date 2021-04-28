<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

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

Route::get('/', 'HomeController@show');
Route::get('/admin/production/creer', 'ProductionAdminController@show');
Route::post('/admin/production/creer', 'ProductionAdminController@createProduction');
Route::get('/production/creer', 'CreerProductionController@show');
Route::post('/production/creer', 'CreerProductionController@createProduction');
Route::get('/production/{slug}', 'SingleController@show')->where('slug', '[0-9]+');
Route::any('/recherche', 'RechercheController@show');
Route::get('/production', 'RechercheController@show');
Route::get('/explorer', 'ExploreController@show');
Route::view('/test', 'testform');
Route::view('/a-propos', 'about');
Route::view('/nos-offres', 'offers');
