
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    </li>


    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Add
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add.insert') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Player</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addcoache.insert') }}" class="nav-link {{ Request::is('addplayer') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coache</p>
                </a>
              </li>
            </ul>
          </li>


          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Show
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show.players') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Players</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('show.coaches') }}" class="nav-link {{ Request::is('addplayer') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coaches</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('show.admins') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins</p>
                </a>
              </li>
            </ul>
          </li>



<li class="nav-item">
    <a href="" class="nav-link {{ Request::is('addplayer') ? 'active' : '' }}">
    <i class="bi bi-chat-square-text"></i>
        <p>Send Note</p>
    </a>

</li>

<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
