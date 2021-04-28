<?php

use App\Http\Controllers\FichierController;
use App\Models\Image;
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
    $images = Image::all();
    return view('home', compact('images'));
});

Route::get('/admin', function () {
    return view ('backoffice.admin');
})->name('admin.index');

//fichier
Route::get('/admin/fichier', [FichierController::class, "index"])
->name('fichiers.index');

//create 
Route::get('/admin/fichier/create', [FichierController::class, "create"])
->name('fichiers.create');

//store 
Route::post('/admin/fichier/store', [FichierController::class, "store"])
->name('fichiers.store');

Route::delete('/delete/{id}', [FichierController::class, 'destroy'])
->name('fichiers.destroy');
