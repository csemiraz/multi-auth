<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Author\DashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboard;

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
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('back-end.multi-user.home');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';

Route::group(['as'=>'author.', 'prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth', 'author']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['as'=>'user.', 'prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth' ,'user']], function() {
    Route::get('dashboard', [UserDashboard::class, 'index'])->name('dashboard');
});
