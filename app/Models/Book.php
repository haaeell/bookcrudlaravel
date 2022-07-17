<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //nama table database
    protected $table ='book';
    //kolom yang dapat kitainput
    protected $fillable = [
        'judul',
        'penulis',
        'tahun',
        'penerbit',
    ];
}
