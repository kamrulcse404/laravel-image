<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PdfController;
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

Route::get('/generate-pdf', [PdfController::class, 'generate_pdf']);
Route::get('/download-pdf', [PdfController::class, 'download_pdf']);

Route::get('/create', [ImageController::class, 'create']);
Route::get('/show-image', [ImageController::class, 'index']);
Route::post('/upload-image', [ImageController::class, 'store'])->name('image.store');
