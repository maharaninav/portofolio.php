<?php
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
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
    return view('layouts.public.home');
})->name('home');

//::get('/profile', [ProfileController::class, 'index'])->name('profile'); //menampilkan semua data
//Route::post('/profile', [ProfileController::class, 'create'])->name('profile.create'); //menyimpan data
//Route::get('/profile/{id}/detail', [ProfileController::class, 'detail'])->name('profile.detail'); //menampilkan data berdasarkan id
//Route::post('/profile/{id}/detail', [ProfileController::class, 'update'])->name('profile.detail'); //update data

Route::get('/contact-us', [ContactUsController::class, 'index']) ->name('contact-us');

Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');

//Route::get('/', function () {
 //   return view('layouts.public.app');
//})->name('profile');

Route::get('/profile', [ProfileController::class, 'index']) ->name('profile');

Route::get('/projects', [ProjectsController::class, 'index']) ->name('projects');