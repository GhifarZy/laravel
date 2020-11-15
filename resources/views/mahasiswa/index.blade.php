@extends('layout/main')

@section('title' , 'mahasiwa' )
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2" >hello mahasiswa!</h1>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">no</th>
            <th scope="col">nama</th>
            <th scope="col">nrp</th>
            <th scope="col">email</th>
            <th scope="col">jurusan</th>
            <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs )
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td scope="row">{{ $mhs->nama }}</td>
                <td scope="row">{{ $mhs->nrp }}</td>
                <td scope="row">{{ $mhs->email }}</td>
                <td scope="row">{{ $mhs->jurusan}}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
