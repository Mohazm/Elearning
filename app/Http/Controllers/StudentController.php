<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    // Method unurk menampilkan form tambah student
    public function create(){

        //Mendapatkan data Courses
        $courses = Course::all();

        //Panggil view
        return view('admin.contents.student.create', [
            'courses' => $courses
        ]);
    }

     // Method untuk Menyimpan data form tambah student
     public function store(Request $request){
        // Validasi data
        $request->validate([
            'name' => 'required',
            'nim'=> 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'nullable'

        ]);

        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
        ]);

        //Kembalikan ke halaman studend
        return redirect('admin/student')->with('message', 'Berhasil Menambahkan Student');
    }

    // Method untuk menampilakn halaman edit
    public function edit($id){
        // cari data student berdasarkan id
        $student = Student::find($id); //Select * FROM students WHERE id = $id;
        $courses = Course::all(); //Select * FROM students WHERE id = $id;

        return view('admin.contents.student.edit', [
            'student' => $student, 'courses' => $courses  
        ]);
        
    }

    // menyimpan Hasil update'
    public function update($id, Request $request){
        //  CAri data student berdasarkan id
        $student = Student::find($id);//Select * FROM students WHERE id = $id;

        $request->validate([
            'name' => 'required',
            'nim'=> 'required|numeric',
            'major' => 'required',
            'class' => 'required',
            'course_id' => 'nullable'
        ]);

        // Simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
            'course_id' => $request->course_id
        ]);

        //Kembalikan ke halaman studend
        return redirect('admin/student')->with('message', 'Berhasil MengUpdate Student');

    }

    // Method untuk menghapus student
    public function destroy($id){
         //  CAri data student berdasarkan id
         $student = Student::find($id);//Select * FROM students WHERE id = $id;

        //  hapus student
        $student->delete();

        //Kembalikan ke halaman studend
        return redirect('admin/student')->with('message', 'Berhasil Menghapus Student');
    }
}
