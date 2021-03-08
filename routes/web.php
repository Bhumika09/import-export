<?php

use Illuminate\Support\Facades\Route;
    
use App\Http\Controllers\MyController;


Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');
