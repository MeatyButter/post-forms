<aside class="col-md-3">
    <h1>Dashboard</h1>
    <nav class="sidebar">
      <ul class="list-inline">
          <li>
            <a href="/home" class="{{ \Request::route()->getName() == 'home' ? 'active' : '' }}">Home</a>
          </li>
          <li>
            <a href="/create" class="{{ \Request::route()->getName() == 'create' ? 'active' : '' }}">Create Posts</a>
          </li>
          <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
          </li>
      </ul>
    </nav>
</aside>