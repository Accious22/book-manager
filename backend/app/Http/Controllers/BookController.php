<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * GET /api/books
     * Return every book, newest first.
     */
    public function index(): JsonResponse
    {
        return response()->json(Book::orderByDesc('id')->get());
    }

    /**
     * POST /api/books
     * Validate the payload and persist a new row in the `books` table.
     * Invalid input returns HTTP 422 with an `errors` object (the React app
     * shows these messages under the matching fields).
     */
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title'  => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'genre'  => ['required', 'string', 'max:255'],
        ]);

        $book = Book::create($data);

        return response()->json($book, 201);
    }

    /**
     * GET /api/books/{book}
     * Return one book. An unknown id produces a 404 JSON response.
     */
    public function show(Book $book): JsonResponse
    {
        return response()->json($book);
    }
}
