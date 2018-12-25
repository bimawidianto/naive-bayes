<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  {{-- <a class="navbar-brand" href="{{ route('home') }}">Naive Bayes</a> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('dataset.index') }}">Data Set</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('datatraining.index') }}">Data Training</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('datatesting.index') }}">Data Testing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('seleksi.index') }}">Seleksi</a>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </div>
</nav>
