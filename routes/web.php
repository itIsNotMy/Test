<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

Route::get('/', [RecordController::class, 'index'])->name('record.index');

Route::get('/create', [RecordController::class, 'create'])->name('record.create');

Route::post('/create', [RecordController::class, 'store']);

Route::get('/update/{record}', [RecordController::class, 'edit'])->name('record.edit');

Route::patch('/update/{record}', [RecordController::class, 'update'])->name('record.update');

Route::delete('/update/{record}', [RecordController::class, 'destroy'])->name('record.destroy');

Route::get('/export',[RecordController::class, 'formexport'])->name('export');

Route::post('/export',[RecordController::class, 'export']);

Auth::routes();
