<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table  = 'teams';
    protected $fillable= ['nama','profile','bio'];
    //digunakan apabila tidak menggunakan created_at dan update_at
    //protected $timestamps = false;
}
