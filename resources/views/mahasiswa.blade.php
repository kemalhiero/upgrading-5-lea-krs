@extends('template')

@section('konten')

    @include('header')

    <main class="container">

        <h1 class="text-center mb-4">List Mahasiswa</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $m)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>
                        <a href="#" class="btn btn-warning">
                            <i class="bi bi-pencil-square"> Edit</i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection