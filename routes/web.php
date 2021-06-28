<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
Route::get('/welcome', [CompanyController::class, 'index'])->name('welcome');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/portfolio', [CompanyController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [CompanyController::class, 'blog'])->name('blog');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
