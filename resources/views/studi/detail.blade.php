@extends('template')

@section('konten')

    @include('header')

    <main class="container">

        <h1 class="text-center mb-4">List Mahasiswa Studi</h1>
        
        <table class="table table-bordered w-25 mb-5">
            <tbody>
                <tr>
                <th scope="row">Mata Kuliah</th>
                <td>{{$studi->matkul->nama}}</td>
                </tr>
                <tr>
                <th scope="row">Dosen</th>
                <td>{{$studi->dosen}}</td>
                </tr>
                <tr>
                <th scope="row">Ruang</th>
                <td>{{$studi->ruang}}</td>
                </tr>
                <tr>
                <th scope="row">Jadwal</th>
                <td>{{$studi->jadwal}}</td>
                </tr>
                <tr>
                <th scope="row">Periode</th>
                <td>{{$studi->periode}}</td>
                </tr>
            </tbody>
        </table>

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
                @foreach($list_mhs_kelas as $m)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>
                        <a href="#" class="btn btn-danger">
                            <i class="bi bi-trash">Hapus</i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Siswa
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mahasiswa Studi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/studi/{{$studi->id}}/tambah">
            @csrf
                <div class="modal-body">
                    <input type="hidden" name="id_studi" value="{{$studi->id}}">
                    <div class="mb-3">
                        <label for="opsi-mahasiswa" class="col-form-label">Mahasiswa</label>
                        <select class="form-select" aria-label="mahasiswa" id="opsi-mahasiswa" name="nim_mhs" required>
                            <option selected>--pilih--</option>
                            @foreach($mahasiswa as $m)
                            <option value="{{$m->nim}}">{{$m->nama}}</option>
                            @endforeach
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