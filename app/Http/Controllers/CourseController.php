<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   // Method untuk menampilkan data students 
   public function index(){
    // Menarik data dari database
   $courses = Course::all();

    //    Pamggil view dan kirim courses
    return view('admin.contents.course.index', [
        'courses' => $courses
    ]);
    }
}
