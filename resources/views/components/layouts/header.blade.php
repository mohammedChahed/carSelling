
<header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="{{ route('home') }}">
        <span class="brand-mark"></span>
        <span class="brand-name">Logoipsum</span>
      </a>

      <nav class="header-actions" aria-label="Primary">
        <a href="{{ route('create') }}">
          <button class="btn btn-pill btn-ghost" type="button">
            <span class="btn-plus" aria-hidden="true">+</span>
            Add new Car
          </button>
        </a>

        <a class="btn btn-primary" href="{{ route('signup') }}">Signup</a>
        <a class="link" href="{{ route('signin') }}">Login</a>
      </nav>
    </div>
  </header>