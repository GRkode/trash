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

Route::middleware('auth')->namespace('Backend')->group(function(){
    Route::get('dashboard', 'AdminController@index')->name('home');
    Route::name('application.edit')->get('application', 'ApplicationController@edit');
    //gestion détails poubelle
    Route::get('les-poubelles/{etat}', 'AdminController@indexDepartement')->name('departement.list');
    Route::get('poubelles-departement/{id}', 'AdminController@poubelleDepartement')->name('departement.poub');
    Route::post('liste-filtre-poubelle', 'AdminController@filtrePoubelle')->name('poubelle.filtre');
    Route::get('detail-poubelle/{id}', 'PoubelleController@show')->name('poubelle.show');
    //gestion zones
    Route::resource('zones', 'ZoneController')->except('show');
    Route::get('zones/{zone}', 'ZoneController@alert')->name('zones.destroy.alert');
    //gestion agence ou pme
    Route::resource('agences', 'AgenceController')->except('show');
    Route::get('agences/{agence}', 'AgenceController@alert')->name('agences.destroy.alert');
    //gestion des poubelles
    Route::resource('poubelles', 'PoubelleController')->except('show');
    Route::get('poubelles/{poubelle}', 'PoubelleController@alert')->name('poubelles.destroy.alert');
    //Gestion de la programmation
    Route::resource('programmations', 'ProgrammationController');
    Route::get('programmes/{programme}', 'ProgrammationController@alert')->name('programmations.destroy.alert');
    Route::get('message-aux-agences', 'SmsController@create')->name('messages.create');
    Route::get('programmes/{programme}', 'ProgrammationController@alert')->name('programmations.destroy.alert');
});

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('zone-agence', 'HomeController@getZone')->name('get.zone');

Route::middleware('auth')->namespace('Backend')->group(function(){
    Route::resource('roles', 'RoleController');
    Route::get('roles/{role}', 'RoleController@alert')->name('roles.destroy.alert');
    Route::resource('autorisations', 'AutorisationController')->except(['show']);
    Route::get('autorisations/{autorisation}', 'AutorisationController@alert')->name('autorisations.destroy.alert');
    Route::resource('users', 'UserController');
    Route::get('users/{user}', 'UserController@alert')->name('users.destroy.alert');
    Route::get('commune', 'AjaxController@getCommune')->name('getcommune');
    Route::get('arrondissement', 'AjaxController@getArrondissement')->name('getarrondissement');
    Route::get('quartier', 'AjaxController@getQuartier')->name('getquartier');
});

Route::post('deconnexion', 'Auth\LoginController@logout')->name('logout');
Route::middleware('guest')->group(function () {
    Route::prefix('connexion')->group(function () {
        Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('/', 'Auth\LoginController@login');
    });
    Route::prefix('inscription')->group(function () {
        Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/', 'Auth\RegisterController@register');
    });
});
Route::prefix('passe')->group(function () {
    Route::get('renouvellement', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('renouvellement/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('renouvellement', 'Auth\ResetPasswordController@reset')->name('password.update');
});