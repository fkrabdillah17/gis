<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['preventBackHistory','auth'])->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/master-data', [AdminController::class, 'masterData'])->name('masterData');
        Route::post('/master-data/province', [AdminController::class, 'storeProvince'])->name('province.store');
        Route::patch('/master-data/province/{province}', [AdminController::class, 'updateProvince'])->name('province.update');
        Route::delete('/master-data/province/{province}', [AdminController::class, 'destroyProvince'])->name('province.destroy');
        Route::post('/master-data/regency', [AdminController::class, 'storeRegency'])->name('regency.store');
        Route::patch('/master-data/regency/{regency}', [AdminController::class, 'updateRegency'])->name('regency.update');
        Route::delete('/master-data/regency/{regency}', [AdminController::class, 'destroyRegency'])->name('regency.destroy');
        Route::get('/upload', [AdminController::class, 'upload'])->name('upload');
        Route::post('/upload', [AdminController::class, 'mapStore'])->name('map.store');
        Route::delete('/upload/{map}', [AdminController::class, 'mapDestroy'])->name('map.destroy');
    });
});


Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'auth'])->name('auth');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/pemetaan/{province}/', [UserController::class, 'mapping'])->name('mapping');
Route::get('/pemetaan/{province}/{regency}', [UserController::class, 'mappingDetails'])->name('mapping.details');
Route::get('/tentang-kami', [UserController::class, 'about'])->name('about');
