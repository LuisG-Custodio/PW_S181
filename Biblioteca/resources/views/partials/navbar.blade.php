<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand {{ request ()->routeIs('BPrincipal')? 'text-primary-emphasis':'text-primary'}}" href="{{route('BPrincipal')}}">Generic Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request ()->routeIs('BRegister')? 'disabled':'text-primary'}}" aria-current="page" href="{{route('BRegister')}}">Register</a>
        </li>
      </ul>
      <span class="navbar-text text-success">
        Where writing comes back to life
      </span>
    </div>
  </div>
</nav>