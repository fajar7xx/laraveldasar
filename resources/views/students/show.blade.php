{{-- artinay sama aja dengan folder layout/main --}}
@extends('layout.main')
@section('title', 'Students | Web Laravel Dasar')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Student Details</h1>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$student->nama}}</h4>
                    <p class="card-text">{{$student->nim}}</p>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                    <a class="btn btn-primary" href="{{$student->id}}/edit">Edit</a>
                    {{-- menghapus file mnggunkan method delete --}}
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <a href="/students" class="text-warning float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
