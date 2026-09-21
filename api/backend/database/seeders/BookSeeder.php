<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Optional sample data:  php artisan db:seed --class=BookSeeder
     * Uses firstOrCreate so running it twice does not create duplicates.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Noli Me Tangere',         'author' => 'José Rizal',       'genre' => 'Fiction'],
            ['title' => 'Clean Code',              'author' => 'Robert C. Martin', 'genre' => 'Technology'],
            ['title' => 'A Brief History of Time', 'author' => 'Stephen Hawking',  'genre' => 'Science'],
        ];

        foreach ($books as $book) {
            Book::firstOrCreate(
                ['title' => $book['title'], 'author' => $book['author']],
                ['genre' => $book['genre']]
            );
        }
    }
}
