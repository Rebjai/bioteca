<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Specimen\MammalMeasureController;
use App\Http\Controllers\Specimen\SpecimenController;
use App\Http\Controllers\Tags\TagController;
use App\Http\Controllers\UserController;
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

Route::get(
    '/',
    function () {
        return Inertia::render(
            'Auth/Login',
            [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
                'laravelVersion' => Application::VERSION,
                'phpVersion' => PHP_VERSION,
                'canResetPassword' => Route::has('password.request'),
            ]
        );
    }
);

Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('collection/{specimen}/tag', [TagController::class, 'show']);
Route::resource('collection', SpecimenController::class)->parameters(['collection' => 'specimen']);
// Route::resource('specimen', SpecimenController::class);
Route::resource('mammal-measure', MammalMeasureController::class);
Route::resource('user', UserController::class);

require __DIR__ . '/auth.php';
