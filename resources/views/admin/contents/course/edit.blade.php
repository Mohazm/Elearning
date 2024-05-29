@extends('admin.main')
@section('content')

<div class="pagetitle">
    <h1>Course</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Course</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/course/store/{{$student->id}}" method="post" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $student->name ?? ''}}">
                </div>

                <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Pilih Category</option>
                        <option value="Pemograman Web 2" {{$student->desc == 'Pemograman Web 2' ? 'selected' : ''}}>Pemograman Web 2</option>
                        <option value="Basis Data" {{$student->desc == 'Basis Data' ? 'selected' : ''}}>Basis Data</option>
                        <option value="Bahasa Inggris" {{$student->desc == 'Bahasa Inggris' ? 'selected' : ''}}>Bahasa Inggris</option>
                        <option value="UI / UX" {{$student->desc == 'UI / UX' ? 'selected' : ''}}>UI / UX</option>
                        <option value="Statistika & Probabilitas" {{$student->desc == 'Statistika & Probabilitas' ? 'selected' : ''}}>Statistika & Probabilitas</option>
                        <option value="PPKN" {{$student->desc == 'PPKN' ? 'selected' : ''}}>PPKN</option>
                        <option value="Jaringan Komputer" {{$student->desc == 'Jaringan Komputer' ? 'selected' : ''}}>Jaringan Komputer</option>
                        <option value="komunikasi Efektif" {{$student->desc == 'komunikasi Efektif' ? 'selected' : ''}}>komunikasi Efektif</option>
                    </select>
                </div> 
                
                <div class="mb-2">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" name="desc" id="desc" class="form-control" value="{{ $student->desc ?? ''}}">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
