@extends('layout.dashboard')

@section('title', 'Create Project')
    
@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Project Form</h1>
    </div>

    <section class="project-form">
        <div class="container w-75">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/projects/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $project->id }}">
                <div class="mb-3">
                  <label for="name" class="form-label">Project Name</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $project->name }}">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" rows="10" name="description">{{ $project->description }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status" name="status_id">
                    <option selected>Select status option</option>
                    @foreach ($statuses as $status)
                      <option value="{{ $status->id }}"
                        @if ($status->id == $project->status_id)
                          selected
                        @endif
                      >{{ $status->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-success flex-grow-1">Submit</button>
                    <a href="/manage-projects" class="btn btn-secondary flex-grow-1 ms-2">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection