<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSecurity;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum','verified',
    config('jetstream.auth_session'),
    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/passwordmang.index', [App\Http\Controllers\PasswordMangController::class, 'index'])->name('passwordmang.index');
    Route::post('/store', [App\Http\Controllers\PasswordMangController::class, 'store'])->name('store');
    // Route::get('/show', [App\Http\Controllers\PasswordMangController::class, 'show'])->name('show');
    Route::get('/genratepassword', [App\Http\Controllers\PasswordMangController::class, 'genratepassword'])->name('genratepassword');
  

});
Route::group(['middleware' => ['security']], function () {
    Route::get('/show', [App\Http\Controllers\PasswordMangController::class, 'show'])->name('show');
   
});

// Route::get('/', function () {
//    return 'ok';
// })->middleware(CheckSecurity::class)->name('security');
