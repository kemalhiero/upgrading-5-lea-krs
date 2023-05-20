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
                    <th scope="col">Periode</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($studi as $s)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$s->matkul->nama}}</td>
                    <td>{{$s->dosen}}</td>
                    <td>{{$s->ruang}}</td>
                    <td>{{$s->jadwal}}</td>
                    <td>{{$s->periode}}</td>
                    <td>
                        <a href="/studi/{{$s->id}}" class="btn btn-primary">
                            <i class="bi bi-info-circle-fill"> Detail</i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Studi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/studi/tambah">
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="opsi-matkul" class="col-form-label">Mata Kuliah</label>
                        <select class="form-select" aria-label="mata kuliah" id="opsi-matkul" name="kode_matkul" required>
                            <option selected>--pilih--</option>
                            @foreach($matkul as $m)
                            <option value="{{$m->kode}}">{{$m->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Dosen:</label>
                        <input type="text" class="form-control" id="recipient-name" required name="dosen">
                    </div>                        
                    <div class="mb-3">
                        <label for="opsi-ruangan" class="col-form-label">Ruang</label>
                        <select class="form-select" aria-label="Default select example" id="opsi-ruangan" name="ruang" required>
                            <option selected>--pilih--</option>
                            <option value="H 2.1">H 2.1</option>
                            <option value="H 2.2">H 2.2</option>
                            <option value="H 2.3">H 2.3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="opsi-jadwal" class="col-form-label">Jadwal</label>
                        <select class="form-select" aria-label="Default select example" id="opsi-jadwal" name="jadwal" required>
                            <option selected>--pilih--</option>
                            <option value="Senin 07:30 - 10:00">Senin 07:30 - 10:00</option>
                            <option value="Senin 10:10 - 12:50">Senin 10:10 - 12:50</option>
                            <option value="Selasa 07:30 - 09:10">Selasa 07:30 - 09:10</option>
                            <option value="Rabu 13:30 - 15:10">Rabu 13:30 - 15:10</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="opsi-periode" class="col-form-label">Periode</label>
                        <select class="form-select" aria-label="Default select example" id="opsi-periode" name="periode" required>
                            <option value="2023" selected>2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
            </div>
        </div>
        </div>

    </main>

@endsection