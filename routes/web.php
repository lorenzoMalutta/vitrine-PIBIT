<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\PatenteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/main', [ScreenController::class, 'main']);
Route::get('/vitrine', [ScreenController::class, 'vitrineInicial']);
Route::get('/tecnologias-produtos', [ScreenController::class, 'vitrineTecnologicaProduto']);
Route::get('/tecnologias', [PatenteController::class, 'index']);
Route::get('/tecnologias-patente-{id}-{idPatente}', [PatenteController::class, 'show']);

Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/cadastro', [CadastroController::class, 'create'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.auth');

Route::get('/dashboard-patentes', [AdminController::class, 'index']);

Route::get('/formulario-patente', [PatenteController::class, 'create']);
Route::post('/formulario-patente', [PatenteController::class, 'store'])->name('formulario.create');
Route::get('/dashboard-patentes-deletar', [PatenteController::class, 'dashBoardPatenteDeletar']);
Route::delete('/dashboard-patentes-deletar/{id}-{idPatente}', [PatenteController::class, 'destroy']);
Route::get('/dashboard-patentes-editar', [PatenteController::class, 'dashboardPatentesEditar']);
Route::get('/dashboard-patentes-editar-editando-{id}-{idPatente}', [PatenteController::class, 'edit']);
Route::put('/dashboard-patentes-editar-editando-{id}-{idPatente}', [PatenteController::class, 'update']);
