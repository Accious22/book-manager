<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes  (all URLs are prefixed with /api automatically)
|--------------------------------------------------------------------------
|   GET  /api/books        -> BookController@index  (list all books)
|   POST /api/books        -> BookController@store  (create a book)
|   GET  /api/books/{book} -> BookController@show   (one book's details)
*/

Route::apiResource('books', BookController::class)->only(['index', 'store', 'show']);
