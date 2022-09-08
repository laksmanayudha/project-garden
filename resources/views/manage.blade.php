@extends('layout.dashboard')

@section('title', 'My Dashboard')
    
@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Projects</h1>
        <a href="/projects/create">
            <span class="text-success ms-3" data-feather="plus-circle" class="align-text-bottom"></span>
        </a>
    </div>

    <section class="table-project">
      <div class="container w-100">
        <div class="row">
          @foreach ($projects as $project)
            <div class="col-12 mt-2">
              <div class="card">
                <div class="card-body d-flex">
                  <div class="flex-grow-1">
                    <h5 class="card-title"> 
                      @if ( $project->status->name === 'Completed' )
                        <span class="badge text-bg-success">{{ $project->status->name }}</span>
                      @else
                        <span class="badge text-bg-warning text-white">{{ $project->status->name }}</span>
                      @endif
                      {{ $project->name }}
                    </h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <small class="card-text text-muted">{{ $project->created_at->diffForHumans() }}</small>
                  </div>
                  <div class="d-flex flex-column">
                    <a href="/projects/edit/{{ $project->id }}" class="btn btn-sm btn-info text-white">
                      <span data-feather="edit" class="align-text-bottom"></span>
                    </a>
                    <form action="/projects/delete" method="POST" class="d-inline-block mt-2">
                        @csrf
                        <input type="hidden" value="{{ $project->id }}" name="id">
                        <button class="btn btn-sm btn-danger" type="submit">
                          <span data-feather="trash-2" class="align-text-bottom"></span>
                        </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection