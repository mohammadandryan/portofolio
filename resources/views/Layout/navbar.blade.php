<nav class="navbar dnone navbar-expand-lg navbar-dark shadow bgdark">
    <div class="container-fluid">

            <a class="navbar-brand" href="#">
              <img src="{{ asset('img/logo.svg') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
              <b>YOURTOFOLIO</b>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @yield('menuhome')" aria-current="{{ route('home') }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('menuabout')" href="{{ route('about') }}">About</a>
                    @if(auth()->guard('talentas')->check())
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        Halo, {{auth()->guard('talentas')->user()->nama}}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/profil/{{ auth()->guard('talentas')->user()->id }}"><i class="bi bi-person-circle"></i>My Profil</a></li>
        <li><hr class="dropdown-divider"></li>
        <form action="/proses-logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
        </form>
    </ul>
</li>
@else
<li class="nav-item">
    <a class="nav-link @yield('menulogin')" href="{{ route('login') }}">Login</a>
</li>
@endauth
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('daftar') }}">Daftar</a></li>
                        <li><a class="dropdown-item" href="{{ route('findjob') }}">Temukan Lowongan</a></li>
                        <li><a class="dropdown-item" href="{{ route('findtalent') }}">Temukan Talenta</a></li>
                        <li><a class="dropdown-item" href="{{ route('ownprofil') }}">My Profil</a></li>
                    </ul>
                </li>

            </ul>
            <form action="/cari" class="mt-3 d-flex">
                <input style="" name="input" class="form-control text-dark me-2" type="search"
                    placeholder="Tulis sesuatu.." aria-label="Search">

                <button style="color:#212542;height:2.5rem" class="btn bg-bdark text-light" type="submit"><b><i
                            class="bi bi-search"></i></b></button>
            </form>
       
    </div>
</nav>


