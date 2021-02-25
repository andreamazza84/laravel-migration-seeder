<?php

/*
laravel-migration-seeder
Istruzioni:
Seguendo quello che abbiamo fatto in classe create una nuova applicazione laravel,
generate qualche Modello con relativi file per le migrazioni e seeders. Per dimostrare che avete capito
quanto fatto in classe, usate i vari metodi visti.
Qundi magari un modello avrá un seeder che prende i dati sotto forma di array
Un alto modello che li prende da un file di configurazione
E poi qualche modello in piú che utilizzi fake per gerenrare dati.
A voi la scelta di cosa creare, ma per darvi qualche idea,
Sistema per la gestione dei dipendenti (Modelli: Employee, Department, Company)
Sistema per la gestione degli studenti (Modelli: Student, Class, Course)
Sistema per la gestione di prodotti (Modelli: Product, Category, User, Sale)
*/


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

//App Controller
Route::get('/', 'AppController@index')->name('home');
Route::get('/videogames', 'AppController@products')->name('videogames');
Route::get('/contacts', 'AppController@contacts')->name('contacts');

//Main Controller
Route::resource('products', 'ProductController');

