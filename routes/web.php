<?php

use App\Http\Controllers\Api\familyAPIcontroller;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Catalogs\LocationController;
use App\Http\Controllers\CollectorController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Specimen\MammalController;
use App\Http\Controllers\Specimen\SpecimenController;
use App\Http\Controllers\Tags\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Species\SpeciesController;
use App\Http\Controllers\Specimen\AmphibianController;
use App\Http\Controllers\Specimen\BirdController;
use App\Http\Controllers\Specimen\ReptileController;
use App\Http\Controllers\Genus\GenusController;
use App\Http\Controllers\Family\FamilyController;
use App\Http\Controllers\ProfileController;

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
)->middleware('guest');

Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');








Route::middleware(['auth', 'verified'])->group(
    function () {
        Route::resource('profile', ProfileController::class)->only(['index', 'update'])->parameters(['profile' => 'user']);
        Route::get('collection/{specimen}/tag', [TagController::class, 'show'])->name('collection.tag');
        Route::resource('collection', SpecimenController::class)->parameters(['collection' => 'specimen']);
        Route::resource('user', UserController::class);
        Route::resource('collector', CollectorController::class);
        Route::resource('assistant', AssistantController::class);
        Route::resource('species', SpeciesController::class);
        Route::resource('genus', GenusController::class);
        Route::resource('family', FamilyController::class);
        Route::resource('location', LocationController::class);
        //collections - measures
        Route::resource('mammal', MammalController::class);
        Route::resource('bird', BirdController::class);
        Route::resource('reptile', ReptileController::class);
        Route::resource('amphibian', AmphibianController::class);

        Route::get('download', [SpecimenController::class, 'index'])->name('download');
        Route::put('change-password', [PasswordController::class, 'update'])->name('change-password');
    }
);
// Route::resource('specimen', SpecimenController::class);

require __DIR__ . '/auth.php';
