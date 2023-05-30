<li class="nav-item">
    <a href="{{ route('dossiers.index') }}"
       class="nav-link {{ Request::is('dossiers*') ? 'active' : '' }}">
        <p>Dossiers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('installateurs.index') }}"
       class="nav-link {{ Request::is('installateurs*') ? 'active' : '' }}">
        <p>Installateurs</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('districts.index') }}"
       class="nav-link {{ Request::is('districts*') ? 'active' : '' }}">
        <p>Districts</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


