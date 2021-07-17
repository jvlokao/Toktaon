<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProgramaController;

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

Route::get('/', HomeController::class);

Route::get('/contato', [HomeController::class, "contato"]);

Route::get('/programas/{id}', [HomeController::class, "exibirPrograma"]);

Route::get('/dashboard',DashboardController::class)->middleware(['auth'])->name('dashboard');

Route::post('/admin/criarprograma',[ProgramaController::class,'create'])->middleware(['auth']);

Route::post('/admin/addepisodio',[ProgramaController::class,'createEpisode'])->middleware(['auth']);

require __DIR__.'/auth.php';
