{{-- artinay sama aja dengan folder layout/main --}}
@extends('layout.main')
@section('title', 'About | Web Laravel Dasar')

@section('container')
    
<div class="container">
    <div class="row col-10">
        <h1 class="mt-2">Hello, {{$nama}}</h1>
    </div>
</div>
@endsection
