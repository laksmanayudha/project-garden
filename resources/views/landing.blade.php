@extends('layout.main')

@section('title', 'Landing Page')

@section('content')
    <div class="p-5 mt-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to our website!</h1>
            <p class="col-md-8 fs-4">Make projects for users, gardeners, and designers easier and more practical and share them easily.</p>
            <a class="btn btn-outline-success btn-lg" href="/login" type="button">Get started</a>
        </div>
    </div>
@endsection