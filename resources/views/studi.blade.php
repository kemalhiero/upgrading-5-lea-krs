@extends('template')

@section('konten')

    @include('header')

    <main class="container">

        <h1 class="text-center mb-4">Studi Mahasiswa</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Jadwal</th>
                    <th scope="col">Ruang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dasar Pemrograman</td>
                    <td>Surya Afnarius</td>
                    <td>Senin 10.00 -12.00</td>
                    <td>H 2.3</td>
                    <td>
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-info-circle-fill"> Detail</i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

    </main>

@endsection