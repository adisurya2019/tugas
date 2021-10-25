<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataMahasiswaController;
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

Route::get('/', [Controller::class, 'home'] );

Route::get('dataMahasiswa', [DataMahasiswaController::class, 'read']);
Route::get('dataMahasiswa/add', [DataMahasiswaController::class, 'add']);
Route::post('dataMahasiswa', [DataMahasiswaController::class, 'addProcess']);
Route::get('dataMahasiswa/edit/{id}', [DataMahasiswaController::class, 'edit']);
Route::patch('dataMahasiswa/{id}', [DataMahasiswaController::class, 'editProcess']);
Route::delete('dataMahasiswa/{id}', [DataMahasiswaController::class, 'delete']);
