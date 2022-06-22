<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadPhotoController;
use App\Http\Controllers\ImageUploadController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/upload', [App\Http\Controllers\UploadPhotoController::class, 'index'])->name('upload');
Route::post('/upload', [App\Http\Controllers\UploadPhotoController::class, 'store']);
Route::get('/photos', [App\Http\Controllers\PhotosController::class, 'index'])->name('photos');
Route::get('/photos', [App\Http\Controllers\PhotosController::class, 'photos'])->name('photos');
Route::get('/collections', [App\Http\Controllers\CollectionsController::class, 'index'])->name('collections');


//For adding an image
Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[ImageUploadController::class,'storeImage'])
->name('images.store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');
