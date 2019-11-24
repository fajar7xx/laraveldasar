{{-- artinay sama aja dengan folder layout/main --}}
@extends('layout.main')
@section('title', 'Students | Web Laravel Dasar')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Edit Student Form</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/students/{{$student->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" name="nama" id="nama" placeholder="masukkan nama lengkap" class="form-control @error('nama') is-invalid @enderror" value="{{$student->nama}}">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Induk Mahasiswa</label>
                            <input type="text" name="nim" id="nim" placeholder="masukkan nim" class="form-control @error('nim') is-invalid @enderror" value="{{$student->nim}}">
                            @error('nim')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Mahasiswa</label>
                            <input type="text" name="email" id="email" placeholder="Maukkan Email terbaru" class="form-control" value="{{$student->email}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan Kuliah</label>
                            <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan Kuliah" class="form-control" value="{{$student->jurusan}}">
                            @error('jurusan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button class="btn btn-success float-right" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
