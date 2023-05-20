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
                <tr>
                    <th scope="row">1</th>
                    <td>20124314</td>
                    <td>Ajo</td>
                    <td>Laki-Laki</td>
                    <td>Pariaman</td>
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