<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;;

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


Route::get('/', [ MainController::class, 'index' ])->name('index');

Route::get('/logout', [ AuthenticatedSessionController::class, 'destroy' ])->name('get-logout');

Route::group(['middleware' => 'auth', 'middleware' => 'is_admin'], function() {
    Route::get('/admin', [ HomeController::class, 'index'])->name('home');
});

Route::get('/services', [ MainController::class, 'show_services' ])->name('show_services');

Route::get('/managers', [ MainController::class, 'show_managers' ])->name('show_managers');

Route::get('/services/{service_category?}', [ MainController::class, 'show_service_category' ])->name('show_service_category');

Route::get('/services/{service_category}/{service?}', [ MainController::class, 'show_one_service' ])->name('show_one_service');

Route::get('/event', [ EventController::class, 'show_project' ])->name('show_project');

Route::get('/event/{id?}', [ EventController::class, 'show_one_project' ])->name('show_one_project');

Route::post('/event/add/{id}', [ EventController::class, 'project_add' ])->name('project_add');

Route::post('/event/remove/{id}', [ EventController::class, 'project_remove' ])->name('project_remove');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
