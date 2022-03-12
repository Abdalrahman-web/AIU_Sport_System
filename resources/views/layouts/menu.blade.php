<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    </li>


<li class="nav-item">
    <a href="{{ route('add.insert') }}" class="nav-link {{ Request::is('addplayer') ? 'active' : '' }}">
        <i class="nav-icon fas fa-sign"></i>
        <p>Add Player</p>
    </a>

</li>

<li class="nav-item">
    <a href="{{ route('addcoache.insert') }}" class="nav-link {{ Request::is('addcoache') ? 'active' : '' }}">
        <i class="nav-icon fas fa-sign"></i>
        <p>Add Coaches</p>
    </a>

</li>

<li class="nav-item">
    <a href="" class="nav-link {{ Request::is('addplayer') ? 'active' : '' }}">
    <i class="bi bi-chat-square-text"></i>
        <p>Send Note</p>
    </a>

</li>
