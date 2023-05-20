@extends('template')

@section('konten')

    @include('header')

    <main class="container">

    <h1 class="text-center mb-4">List Mata Kuliah</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah SKS</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_matkul as $m)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$m->kode}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->sks}}</td>
                <td>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-info-circle-fill"> Detail</i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </main>
@endsection