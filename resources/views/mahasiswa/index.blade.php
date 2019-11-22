{{-- artinay sama aja dengan folder layout/main --}}
@extends('layout.main')
@section('title', 'Mahasiswa | Web Laravel Dasar')

@section('container')

<div class="container">
    <div class="row col-12">
        <h1 class="mt-2">Daftar Mahasiswa</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($students as $student)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td>{{$student->nama}}</td>
                        <td>{{$student->nim}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
