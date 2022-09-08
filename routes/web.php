<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SignUpController;
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

Route::get('/', function () {
    return view('landing');
});

Route::group([
    'middleware' => 'guest'
], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/signup', [SignUpController::class, 'index']);
    Route::post('/signup', [SignUpController::class, 'signup']);
});

Route::group([
    'middleware' => 'auth'
], function() {

    Route::post('/logout', LogoutController::class);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/projects', [DashboardController::class, 'projects']);

    Route::group([
        'middleware' => 'isDesignerOrGardener'
    ], function(){
        Route::get('/manage-projects', [ProjectController::class, 'index']);
        Route::get('/projects/create', [ProjectController::class, 'create']);
        Route::get('/projects/edit/{project:id}', [ProjectController::class, 'edit']);
        Route::post('/projects/store', [ProjectController::class, 'store']);
        Route::post('/projects/update', [ProjectController::class, 'update']);
        Route::post('/projects/delete', [ProjectController::class, 'delete']);
    });
});