{{-- artinay sama aja dengan folder layout/main --}}
@extends('layout.main')
@section('title', 'Students | Web Laravel Dasar')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">

            {{-- menampilkan pesan ketika berhasil nambah data --}}
            @if (session('status'))
            <div class="alert alert-success my-2">
                {{ session('status') }}
            </div>
            @endif
            
            <h1 class="mt-2">Student lists</h1>
            <a href="/students/create" class="btn btn-primary mb-3">Add Student</a>
            <ul class="list-group">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge badge-info badge-pill">Detail</a>
                </li>         
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
