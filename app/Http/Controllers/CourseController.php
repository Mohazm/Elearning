<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
   // Method untuk menampilkan data courses 
   public function index(){
    // Menarik data dari database
   $courses = Course::all();

    //    Pamggil view dan kirim courses
    return view('admin.contents.course.index', [
        'courses' => $courses
    ]);
    }

     // Method unurk menampilkan form tambah course
     public function create(){
        return view('admin.contents.course.create');
    }

     // Method untuk Menyimpan data form tambah course
     public function store(Request $request){
        // Validasi data
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        Course::create([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        //Kembalikan ke halaman studend
        return redirect('admin/course')->with('message', 'Berhasil Menambahkan course');
    }

    // Method untuk menampilakn halaman edit
    public function edit($id){
        // cari data course berdasarkan id
        $course = Course::find($id); //Select * FROM courses WHERE id = $id;

        return view('admin.contents.course.edit', [
            'course' => $course
        ]);
    }

    // menyimpan Hasil update'
    public function update($id, Request $request){
        //  CAri data course berdasarkan id
        $course = Course::find($id);//Select * FROM courses WHERE id = $id;

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required'
        ]);

        // Simpan perubahan
        $course->update([
            'name' => $request->name,
            'category' => $request->category,
            'desc' => $request->desc,
        ]);

        //Kembalikan ke halaman studend
        return redirect('admin/course')->with('message', 'Berhasil MengUpdate course');

    }

    // Method untuk menghapus course
    public function destroy($id){
         //  CAri data course berdasarkan id
         $course = Course::find($id);//Select * FROM courses WHERE id = $id;

        //  hapus course
        $course->delete();

        //Kembalikan ke halaman studend
        return redirect('admin/course')->with('message', 'Berhasil Menghapus course');
    }
}
