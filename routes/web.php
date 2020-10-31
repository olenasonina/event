<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::group([
    'middleware' => 'auth', 
    'middleware' => 'is_admin',
    'prefix' => 'admin',
], function() {
    Route::get('/', [ HomeController::class, 'index'])->name('home');
    Route::resource('categories', CategoryController::class)->only([
        'index', 'show', 'create', 'store', 'edit', 'destroy', 'update'
    ])->names([
        'show' => 'categories.show'
    ]);
});

Route::get('/services', [ MainController::class, 'show_services' ])->name('show_services');

Route::get('/managers', [ MainController::class, 'show_managers' ])->name('show_managers');

Route::get('/services/{service_category?}', [ MainController::class, 'show_service_category' ])->name('show_service_category');

Route::get('/services/{service_category}/{service?}', [ MainController::class, 'show_one_service' ])->name('show_one_service');

Route::group(['prefix' => 'event'], function() {
    Route::post('/add/{id}', [ EventController::class, 'project_add' ])->name('project_add');
    
    Route::group(['middleware' => 'event_not_empty'], function() {
        Route::get('/', [ EventController::class, 'show_project' ])->name('show_project');    
        Route::get('/{id?}', [ EventController::class, 'show_one_project' ])->name('show_one_project');    
        Route::post('/remove/{id}', [ EventController::class, 'project_remove' ])->name('project_remove');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
