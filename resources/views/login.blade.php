@extends('layout.main')

@section('title', 'Login')

@section('content')
    <div class="form-signin col-lg-6 m-auto mt-5">
        <form action="/login" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" id="floatingInput" placeholder="Email" autofocus>
                <label for="floatingInput">Email address</label>
                @error('email') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-success" type="submit">Log in</button>
        </form>
    </div>
@endsection