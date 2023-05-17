<?php

use App\Http\Controllers\SenaraiController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    //Senarai Routing
    Route::get('/senarais', [SenaraiController::class, 'index'])->name('senarais.index');
    Route::delete('/senarais/{senarai}', [SenaraiController::class, 'destroy'])->name('senarais.delete');
    Route::get('/senarais/create', [SenaraiController::class, 'create'])->name('senarais.create');
    Route::post('/senarais', [SenaraiController::class, 'store'])->name('senarais.store');
    Route::get('/senarais/{senarai}/edit', [SenaraiController::class, 'edit'])->name('senarais.edit');
    Route::put('/senarais/{senarai}', [SenaraiController::class, 'update'])->name('senarais.update');
});
