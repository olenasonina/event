<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/services', [ MainController::class, 'show_services' ])->name('show_services');

Route::get('/services/{service_category?}', [ MainController::class, 'show_service_category' ])->name('show_service_category');

Route::get('/services/{service_category}/{service?}', [ MainController::class, 'show_one_service' ])->name('show_one_service');

Route::get('/my_projects', [ MainController::class, 'show_projects' ])->name('show_projects');

Route::get('/my_projects/{name?}', [ MainController::class, 'show_one_project' ])->name('show_one_project');
