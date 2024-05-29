<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    

    // Mendefinisikan field yang bolrh di isi
    protected $fillable = ['name', 'nim', 'major', 'class'];
    
}

