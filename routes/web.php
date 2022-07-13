<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    TransfersController,
    UserController,
    WalletsController,
    CardsController,
    ProjectsController,
    FileController
};


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

Route::resource('user', UserController::class);
Route::resource('transfers', TransfersController::class);
Route::resource('wallets', WalletsController::class);
Route::resource('cards', CardsController::class);
Route::resource('projects', ProjectsController::class);

Route::get('fileupload', [FileController::class, 'index']);
Route::post('fileupload', [FileController::class, 'store'])->name('file.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
