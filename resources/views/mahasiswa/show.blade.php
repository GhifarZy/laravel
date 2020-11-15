@extends('layout/main')

@section('title' , 'mahasiwa' )
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2" >detail mahasiswa!</h1>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $student->nama }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
    <p class="card-text">{{ $student->email }}</p>
    <p class="card-text">{{ $student->jurusan }}</p>
<br>
<a href="{{ $student->id }}/edit"  class="btn btn-primary">edit</a>

<form action="{{ $student->id }}" method="post" class="d-inline">
  @method('delete')
  @csrf
<button type="submit"  class="btn btn-danger">hapus</button></form>

<a href="/student" class="btn btn-info" >back</a>
  </div>
</div>
</div>
@endsection
