
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom rounded bg-info">
    <nav class="navbar navbar-dark bg-dark">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none ">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-decoration-none" href="/teams">Teams</a>
        <a class="p-2 text-decoration-none" href="/news">News</a>
      </nav>
    @if(Auth::check())
        <a class="btn btn-sm btn-outline-secondary" href="/register">{{auth()->user()->name}}</a>
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
    @else
        <a class="p-2 btn btn-sm btn-outline-secondary" href="/login">Sign in</a>
        <a class="p-2 btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
    @endif
    </header>

    