<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Method untuk menampilkan data students 
    public function index(){
        // Menarik data dari database
       $students = Student::all();

    //    Pamggil view dan kirim students
    return view('admin.contents.student.index', [
        'students' => $students
    ]);
    }
}
