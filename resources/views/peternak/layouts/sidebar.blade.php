<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('peternak') ? 'active' : '' }}" aria-current="page" href="/peternak">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('peternak/dataternak*') ? 'active' : '' }}"
                    href="/peternak/dataternak">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Data Ternak
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('peternak/datalaporan*') ? 'active' : '' }}"
                    href="/peternak/datalaporan">
                    <span data-feather="book" class="align-text-bottom"></span>
                    Laporan Progress </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('peternak/dataproduk*') ? 'active' : '' }}"
                    href="/peternak/dataproduk">
                    <span data-feather="archive" class="align-text-bottom"></span>
                    Jual/Beli Hasil Ternak </a>
            </li>
        </ul>
    </div>
</nav>
