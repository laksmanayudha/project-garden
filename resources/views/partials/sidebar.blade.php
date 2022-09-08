<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/projects">
                <span data-feather="file" class="align-text-bottom"></span>
                Projects
                </a>
            </li>
        </ul>
        
        @unless ( auth()->user()->role->name === 'User' )
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                <span>Manage</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="/manage-projects">
                    <span data-feather="settings" class="align-text-bottom"></span>
                    Manage Projects
                    </a>
                </li>
            </ul>
        @endunless
    </div>
</nav>