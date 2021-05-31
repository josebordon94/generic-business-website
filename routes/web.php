<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryPhotoController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('gallery', [GalleryPhotoController::class, 'index'])->name('gallery');
Route::get('events', [EventController::class, 'index'])->name('events.show');

//Admin routes
Route::get('admin', [HomeController::class, 'admin'],)->name('home.admin');
Route::post('admin', [HomeController::class, 'save'],)->name('home.save');

// Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('carousel-upload', [ HomeController::class, 'carouselUploadPost' ])->name('home.carousel-upload');

Route::get('carousel-delete/{id}', [ HomeController::class, 'carouselDelete' ])->name('home.carousel-delete');

Route::get('events/admin', [EventController::class, 'admin'],)->name('events.admin');
Route::get('events/create', [EventController::class, 'create'],)->name('events.create');
Route::post('events', [EventController::class, 'store'],)->name('events.store');
Route::get('events/{id}/delete', [EventController::class, 'delete'],)->name('events.delete');

Route::get('gallery/admin', [GalleryPhotoController::class, 'admin'],)->name('gallery.admin');



