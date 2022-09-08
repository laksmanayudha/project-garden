@extends('layout.dashboard')

@section('title', 'My Dashboard')
    
@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Projects</h1>
    </div>

    <section class="recent-project">
        <div class="project-list">
            <div class="row">
              @foreach ($projects as $project)
                <div class="col-lg-4 col-sm-6 mt-3">
                  <div class="card">
                    <div class="card-body d-flex flex-column" style="height: 230px;">
                      <div style="flex-grow: 1; overflow: auto;">
                        <h5 class="card-title">
                          @if ( $project->status->name === 'Completed' )
                            <span class="badge text-bg-success">{{ $project->status->name }}</span>
                          @else
                            <span class="badge text-bg-warning text-white">{{ $project->status->name }}</span>
                          @endif
                          {{ $project->name }} 
                        </h5>
                        <p class="card-text">{{ $project->description }}</p>
                      </div>
                      <div>
                        <small class="card-text text-muted">By {{ $project->user->name }}</small>
                        <small class="card-text text-muted">&#183; {{ $project->created_at->diffForHumans() }}</small> <br>
                      </div>
                      <a href="#" class="btn btn-outline-success mt-2">See more</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
@endsection