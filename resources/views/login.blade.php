@extends('template')

@section('konten')

    <div class="w-50 mx-auto mt-5 text-center">
        <form class="mx-5" method="" action="">
            <img class="mb-2" src="unand.png" alt="logo unand" height="100">
            <h1 class="h3 mb-3 fw-normal">Masuk!!</h1>

            <div class="mb-3 text-start">
                <label for="InputEmail" class="form-label">Username</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 text-start">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword">
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-50">Login</button>
        </form>
    </div>

@endsection