<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dkpp') ? 'active' : '' }}" href="/dkpp">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dkpp/datajadwal*') ? 'active' : '' }}" href="/dkpp/datajadwal">
                    <span data-feather="book" class="align-text-bottom"></span>
                    Data Jadwal
                </a>
            </li>
        </ul>
    </div>
</nav>
