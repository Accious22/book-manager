<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Fields that may be mass-assigned by Book::create().
     */
    protected $fillable = [
        'title',
        'author',
        'genre',
    ];
}
