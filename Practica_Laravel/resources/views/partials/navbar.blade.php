<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand {{ request ()->routeIs('recuerdo.index')? 'text-primary fw-bold  ':''}}" href="{{route('recuerdo.index')}}">Diario Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request ()->routeIs('recuerdo.inicio')? 'text-primary fw-bold':''}} " aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request ()->routeIs('recuerdo.create')? 'text-primary fw-bold':''}}" href="/recuerdo/create">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request ()->routeIs('recuerdo.index')? 'text-primary fw-bold':''}}" href="/recuerdo">Recuerdos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>