<?php

use App\Http\Controllers\TbCarsController;
use Illuminate\Support\Facades\Route;

//Para visualizar as páginas
Route::get('/',[TbCarsController::class,'MostrarHome'])->name('home-car');
Route::get('/cadastro-carro',[TbCarsController::class,'MostrarCadastroCar'])->name('show-cadastro-car');
Route::get('/lista-carro',[TbCarsController::class,'MostrarCarNome'])->name('lista-car');
Route::get('/altera-carro/{id}',[TbCarsController::class,'MostrarCarCodigo'])->name('show-altera-car');

//para cadastrar
Route::post('/cadastro-car',[TbCarsController::class, 'CadastrarCar'])->name('cadastra-car');

//Para deletar
Route::delete('/apaga-car/{id}',[TbCarsController::class, 'Destroy'])->name('apaga-car');

//para alterar
Route::put('/altera-car/{id}',[TbCarsController::class, 'Update'])->name('altera-car');
