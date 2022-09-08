<header class="mb-auto">
    <nav class="navbar navbar-expand-lg bg-success text-white">
        <div class="container">
          <a class="navbar-brand text-white" href="/">GardenLab</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            @auth
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-white" href="/dashboard">My Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/projects">Projects</a>
                </li>
              </ul>
            @endauth
            @guest
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link text-white" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/login">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="/signup">Sign Up</a>
                </li>
              </ul>
            @endguest
          </div>
        </div>
    </nav>
</header>