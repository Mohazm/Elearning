<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

       // Mendefinisikan field yang boleh di isi
       protected $fillable = ['name', 'category', 'desc'];
}
