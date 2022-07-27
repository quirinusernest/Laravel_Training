<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'author_id',
        'judul',
        'gambar',
        'deskripsi'
    ];

    public function author(){
        return $this->belongsTo(Author::class,'author_id');
    }
}
