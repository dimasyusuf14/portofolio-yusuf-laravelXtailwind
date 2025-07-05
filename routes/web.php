<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyworkController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebSettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-me', AboutController::class)->name('about-me');
Route::get('/my-works', [MyworkController::class, 'myWorks'])->name('my-works');



Route::get('/detail-project', function () {
    return view('frontend.detail-project.detail-project');
})->name('detail-project');


Route::get('/contactMe', function () {
    return view('frontend.contact.contact-me');
})->name('contact-me');

Route::get('/dashboard', function () {
    return view('backend.main');
})->name('dashboard');







Route::get('/backend/login', [AuthController::class, 'index'])->name('login');
Route::post('/backend/login', [AuthController::class, 'login'])->name('do-login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/backend/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/backend/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/backend/category', [CategoryController::class, 'store'])->name('store_category');
    Route::delete('/backend/category/{id}', [CategoryController::class, 'destroy'])->name('destroy_category');
    Route::get('/backend/category/{id}', [CategoryController::class, 'show'])->name('show_category');
    Route::put('/backend/category/update/{id}', [CategoryController::class, 'update'])->name('update_category');


    Route::get('/backend/webSetting', [WebSettingsController::class, 'index'])->name('webSetting');
    Route::get('/backend/webSetting/create', [WebSettingsController::class, 'create'])->name('create_webSetting');
    Route::post('/backend/webSetting/create', [WebSettingsController::class, 'store'])->name('store_webSetting');
    Route::get('/backend/webSetting/{id}', [WebSettingsController::class, 'show'])->name('show_webSetting');
    Route::put('/backend/webSetting/update/{id}', [WebSettingsController::class, 'update'])->name('update_webSetting');
    Route::delete('/backend/webSetting/{id}', [WebSettingsController::class, 'destroy'])->name('destroy_webSetting');


    Route::get('/backend/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/backend/project/create', [ProjectController::class, 'create'])->name('create_project');
    Route::post('/backend/project', [ProjectController::class, 'store'])->name('store_project');
    Route::delete('/backend/project/{id}', [ProjectController::class, 'destroy'])->name('destroy_project');
    Route::get('/backend/project/{id}', [ProjectController::class, 'show'])->name('show_project');
    Route::put('/backend/project/update/{id}', [ProjectController::class, 'update'])->name('update_project');
});
