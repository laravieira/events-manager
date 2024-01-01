<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedEventController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/events', EventController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::get('/api/like/{event}', [LikeController::class, 'create']);
    Route::get('/api/save/{event}', [SavedEventController::class, 'create']);
    Route::get('/api/booking/{event}', [BookingController::class, 'create']);
    Route::post('/api/comments/{event}', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/api/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/api/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});
Route::GET('/events/{event:id}', [EventController::class, 'show'])->name('events.show');

require __DIR__.'/auth.php';
