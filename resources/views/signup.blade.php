@extends('layout.main')

@section('title', 'Sign Up')

@section('content')
    <div class="form-signin col-lg-6 m-auto mt-5">
        <form action="/signup" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">Please Sign Up</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
                @error('name') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="mb-3">
                <select class="form-select p-3 @error('role_id') is-invalid @enderror" id="role" name="role_id">
                    <option selected>Select Role Option</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id') <p class="text-danger">Please select a role.</p> @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="Email">
                <label for="floatingInput">Email address</label>
                @error('email') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                <p class="text-secondary">Min 8 characters password.</p>
                @error('password') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password_confirmation" id="floatingPassword" placeholder="Password Confirmation">
                <label for="floatingPassword">Password Confirmation</label>
            </div>
            <button class="w-100 btn btn-lg btn-success" type="submit">Sign Up</button>
        </form>
    </div>
@endsection