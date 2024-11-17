<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\Entry;
use GuzzleHttp\Psr7\Request;
use App\Models\Image;

Route::get('/', fn () => view('index'))->name('form');
Route::get('/success', fn () => view('success'))->name('success');

Route::post('/posts', [EntryController::class, 'store'])->name('entry.store');
Route::get('/8oSrRUo6', [EntryController::class, 'index'])->name('table');
Route::get('/9RP6xyZq', [EntryController::class, 'deleted'])->name('completed');
Route::delete('/entries/{entry}', [EntryController::class, 'destroy'])->name('entries.destroy');
Route::patch('/entries/{entry}/restore', [EntryController::class, 'restore'])->name('entries.restore');
Route::get('/234ms/{entry}', [EntryController::class, 'show'])->name('show');

//  LANDING PAGE
Route::get('/serie-del-caribe', function () {
    $images = Image::first();
    return view('landing', compact('images'));
});

//  IMAGE ADMIN
Route::get('/2g3n78s', [ImageController::class, 'index'])->name('admin.image');

// Update images via POST
Route::post('/82g3nc78as4', [ImageController::class, 'store'])->name('admin.images.store');
