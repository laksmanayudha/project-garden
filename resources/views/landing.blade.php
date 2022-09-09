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

    <hr class="my-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" class="" alt="" style="height: 150px; width: 150px; outline: 1px solid green; outline-offset: 3px; border-radius: 50%; object-fit: cover;">
        
                <h2 class="fw-normal mt-2">User</h2>
                <p class="text-center">Become our User and get thousands of benefits and safe the world.</p>
                <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <img src="https://images.unsplash.com/photo-1586280268958-9483002d016a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1090&q=80" class="" alt="" style="height: 150px; width: 150px; outline: 1px solid green; outline-offset: 3px; border-radius: 50%; object-fit: cover;">
        
                <h2 class="fw-normal mt-2">Gardener</h2>
                <p class="text-center">Become our Designer, design a better product and project to explore more powerful ideas.</p>
                <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <img src="https://images.unsplash.com/photo-1574100004472-e536d3b6bacc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="" alt="" style="height: 150px; width: 150px; outline: 1px solid green; outline-offset: 3px; border-radius: 50%; object-fit: cover;">
        
                <h2 class="fw-normal mt-2">Designer</h2>
                <p class="text-center">Become our Gardener, contribute in every project and get more experience to safe the world.</p>
                <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
            </div>
        </div>
    </div>
@endsection