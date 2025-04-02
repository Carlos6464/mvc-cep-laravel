<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

Route::get('/', action: [EnderecoController::class, 'listar'])->name('listar');

Route::get('/listar', action: [EnderecoController::class, 'index'])->name('index');

Route::get('/buscar', action: [EnderecoController::class, 'buscar'])->name('buscar');

Route::post('/salvar', action: [EnderecoController::class, 'salvar'])->name('salvar');



Route::delete('/excluir/{id}', action: [EnderecoController::class, 'excluir'])->name('excluir');
