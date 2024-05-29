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
            <form action="/admin/course/store" method="post" class="mt-3">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Pilih Category</option>
                        <option value="Pemograman Web 2">Pemograman Web 2</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="UI / UX">UI / UX</option>
                        <option value="Statistika & Probabilitas">Statistika & Probabilitas</option>
                        <option value="PPKN">PPKN</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="komunikasi Efektif">komunikasi Efektif</option>
                    </select>
                </div> 
                
                <div class="mb-2">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" name="desc" id="desc" class="form-control">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
