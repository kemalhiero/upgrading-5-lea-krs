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
            <tr>
                <th scope="row">1</th>
                <td>JSI123</td>
                <td>Dasar Pemrograman</td>
                <td>3</td>
                <td>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-info-circle-fill"> Detail</i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    </main>
@endsection