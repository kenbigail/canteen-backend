<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>All User</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('user.index') ? 'active' : '' }}">
                        <a class="nav-link"
                            href="{{ route('user.index') }}">Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
