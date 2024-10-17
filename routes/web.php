<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('/create_kamar', [AdminController::class, 'create_kamar']);

route::post('/tambah_kamar', [AdminController::class, 'tambah_kamar']);

route::get('/data_kamar', [AdminController::class, 'data_kamar']);

route::get('/kamar_update/{id}', [AdminController::class, 'kamar_update']);
route::post('/edit_kamar/{id}', [AdminController::class, 'edit_kamar']);
route::get('/kamar_delete/{id}', [AdminController::class, 'kamar_delete']);
