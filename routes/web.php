<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;
use App\Models\Entry;
use GuzzleHttp\Psr7\Request;

Route::get('/', fn () => view('index'));
Route::get('/success', fn () => view('success'))->name('success');

Route::post('/posts', [EntryController::class, 'store'])->name('entry.store');
Route::get('/8oSrRUo6', [EntryController::class, 'index'])->name('table');
Route::get('/9RP6xyZq', [EntryController::class, 'deleted'])->name('completed');
Route::delete('/entries/{entry}', [EntryController::class, 'destroy'])->name('entries.destroy');
Route::patch('/entries/{entry}/restore', [EntryController::class, 'restore'])->name('entries.restore');
Route::get('/234ms/{entry}', [EntryController::class, 'show'])->name('show');
