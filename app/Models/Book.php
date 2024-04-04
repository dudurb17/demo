<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'table_book';

    protected $fillable = [
        'name',
        'NameAutor',
        'date',
    ];
}