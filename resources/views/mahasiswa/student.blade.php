@extends('layout/main')

@section('title' , 'mahasiwa' )
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2" >hello mahasiswa!</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        <a href="/student/input" class="btn btn-primary" >tambah data</a>
<br>
<br>
        </div>
    </div>
         <ul class="list-group">

         @foreach ($student as $mhs)

            <li class="list-group-item d-flex justify-content-between align-items-center">
             {{ $mhs->nama}}
                <a href="/student/{{ $mhs->id }}" class="badge badge-info">detail</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
