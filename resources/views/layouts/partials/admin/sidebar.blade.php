<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="d-brand logo">
        <a href="{{ url('/') }}" class="simple-text logo-normal">
            Meherpur Portal
        </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
          <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
          <a class="nav-link" href="{{ url('users') }}">
            <i class="material-icons">person</i>
            <p>Users</p>
          </a>
        </li>


        <li class="nav-item {{ Request::is('tourist-spot') ? 'active':'' }}">
          <a class="nav-link" href="{{ url('tourist-spot') }}">
            <i class="material-icons">T</i>
            <p>Tourist Spot</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
