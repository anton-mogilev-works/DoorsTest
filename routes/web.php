<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'main']);

Route::post('/doorParams', [UserController::class, 'doorParams']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/doors', [AdminController::class, 'doors'])->middleware(['auth']);

Route::get('/getDoorPdf/{id}', [AdminController::class, 'getDoorPdf'])->middleware(['auth']);
Route::get('/sendDoorPDFToTelegram/{id}', [AdminController::class, 'sendDoorPDFToTelegram'])->middleware(['auth']);

Route::get('/dashboard/dyeings', [AdminController::class, 'dyeings'])->middleware(['auth']);
Route::post('/dashboard/dyeingAdd', [AdminController::class, 'dyeingAdd'])->middleware(['auth']);

Route::get('/dashboard/skins', [AdminController::class, 'skins'])->middleware(['auth']);
Route::post('/dashboard/skinAdd', [AdminController::class, 'skinAdd'])->middleware(['auth']);

Route::get('/dashboard/knobs', [AdminController::class, 'knobs'])->middleware(['auth']);
Route::post('/dashboard/knobAdd', [AdminController::class, 'knobAdd'])->middleware(['auth']);

Route::get('/dashboard/accessories', [AdminController::class, 'accessories'])->middleware(['auth']);
Route::post('/dashboard/accessoryAdd', [AdminController::class, 'accessoryAdd'])->middleware(['auth']);


require __DIR__ . '/auth.php';