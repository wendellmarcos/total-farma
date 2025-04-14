<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Models\Medicine;



Route::get('/', [MedicineController::class, 'welcome'])->name('medicines.welcome');

// Route::get(/* ROTAS*/'admin/usuarios', [/*CONTROLLER */UserController::class,/* METODO */ 'index'])->name(/* NOME DA ROTA */'users.index');

Route::get('admin/medicines', [MedicineController::class, 'index'])->name('medicines.index');

Route::get('admin/medicines/create', [MedicineController::class, 'create'])->name('medicines.create');

Route::post('admin/medicines', [MedicineController::class, 'store'])->name('medicines.store');

Route::get('admin/medicines/{id}', [MedicineController::class, 'show'])->name('medicines.show');

Route::get('admin/medicines/{id}/edit', [MedicineController::class, 'edit'])->name('medicines.edit');

Route::delete('admin/medicines/{id}', [MedicineController::class, 'destroy'])->name('medicines.destroy');

