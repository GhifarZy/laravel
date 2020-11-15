@extends('layout/main')

@section('title' , 'mahasiwa' )
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2" >form data mahasiswa!</h1>
        </div>
    </div>

    <form method="post" action="/student">
    @csrf
    <div class="form-group">
        <label for="nama">nama</label>
        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" value="{{old('nama')}}" aria-describedby="nama" name="nama" placeholder="masukkan nama" >
        <div class="invalid-feedback">
        please input <b>name!</b>
         </div>
    </div>
    <div class="form-group">
        <label for="nrp">nrp</label>
        <input type="text" class="form-control @error ('nrp') is-invalid @enderror" id="nrp" value="{{old('nrp')}}"  aria-describedby="nrp" name="nrp" placeholder="masukkan nrp" >
        <div class="invalid-feedback">
        please insert <b>nrp</b> only 10
        </div>
    </div>
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" value="{{old('email')}}"  aria-describedby="email" name="email" placeholder="masukkan email" >
        <div class="invalid-feedback">
        please input <b>email!</b>
        </div>
    </div>
    <div class="form-group">
        <label for="jurusan">jurusan</label>
        <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" id="jurusan" value="{{old('jurusan')}}"  aria-describedby="jurusan" name="jurusan" placeholder="masukkan jurusan" >
        <div class="invalid-feedback">
        please input <b>jurusan!</b>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">tambah data!</button>
</form>

</div>
@endsection
