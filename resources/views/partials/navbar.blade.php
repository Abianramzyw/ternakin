<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">Ternakin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dataternak') ? 'active' : '' }}" href="/dataternak">Ternak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penjadwalanternak') ? 'active' : '' }}"
                        href="/penjadwalanternak">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('laporanprogress') ? 'active' : '' }}"
                        href="/laporanprogress">Laporan
                        Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hasilternak') ? 'active' : '' }}" href="/hasilternak">Hasil
                        Ternak</a>
                    //<a class="nav-link {{ Request::is('peternak') ? 'active' : '' }}" aria-current="page" href="/peternak">
                </li>
            </ul> --}}
            <ul class="navbar-nav">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dataternak') ? 'active' : '' }}" href="/dataternak">Ternak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('penjadwalanternak') ? 'active' : '' }}"
                        href="/penjadwalanternak">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('laporanprogress') ? 'active' : '' }}"
                        href="/laporanprogress">Laporan
                        Progress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('hasilternak') ? 'active' : '' }}" href="/hasilternak">Hasil
                        Ternak</a>
                    //<a class="nav-link {{ Request::is('peternak') ? 'active' : '' }}" aria-current="page" href="/peternak">
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ternak
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                        </li>
                        <li><a class="dropdown-item" {{ Request::is('dataternak') ? 'active' : '' }}"
                                href="/dataternak">Data Ternak</a></li>
                        <li><a class="dropdown-item" {{ Request::is('penjadwalanternak') ? 'active' : '' }}"
                                href="/penjadwalanternak">Jadwal</a></li>
                        <li><a class="dropdown-item" {{ Request::is('laporanprogress') ? 'active' : '' }}"
                                href="/laporanprogress">Laporan
                                Progress</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" {{ Request::is('produkternak') ? 'active' : '' }}"
                                href="/produkternak">Produk</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
            </ul>


            {{-- 
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> --}}

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->nama_akun }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profil', Auth::user()->nama_akun) }}">Akun</a></li>
                            <li><a class="dropdown-item" href="/peternak/dataternak">Data Ternak</a></li>
                            <li><a class="dropdown-item" href="/peternak/datalaporan">Data Laporan</a></li>
                            <li><a class="dropdown-item" href="/peternak/dataproduk">Data Produk</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/keluar" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('masuk') ? 'active' : '' }}" href="/masuk">Sign In</a>
                        {{-- <a class="nav-link {{ Request::is('peternak') ? 'active' : '' }}" aria-current="page" href="/peternak"> --}}
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
