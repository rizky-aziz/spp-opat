@if(Auth::check())
<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="assets/icons/logo-spp-opat.svg" width="150px" alt=""></a>
        <button class="navbar-toggler d-lg-none border-0 btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <img src="assets/icons/ic_menu.svg" alt="" srcset="" class="img img-responsive">
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="d-flex">
                            <div class="widget-content-left text-right mr-1">
                                <div class="widget-heading font-weight-bold">{{ auth()->user()->name }}</div>
                                <div class="widget-subheading">{{ ucfirst(auth()->user()->status) }}</div>
                            </div>
                            <div class="widget-content-left d-flex align-items-center">
                                <img src="assets/icons/avatar.svg" width="35px" alt="" srcset="" class="mx-2">
                                <div class="dropdown-toggle"></div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu border-0 shadow-lg fixed-top mt-5" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Profile</a>
                        @if (Route::has('login'))
                        @auth
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        @else
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-4 sticky-top pb-n2">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav m-auto mt-2 mt-lg-0">
            <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="600">
                <div class="align-self-center text-center">
                    <a href="{{url('/beranda')}}"><img src="assets/icons/ic_apps{{ Request::is('beranda', '/') ? '_active' : '' }}.svg" class="nav-link-icon" alt="" srcset=""></a>
                    <a class="nav-link" href="{{url('/beranda')}}">Beranda </a>
                </div>
            </li>
            @if(auth()->user()->status === 'admin' || auth()->user()->status === 'petugas')
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1 " data-aos="zoom-in" data-aos-delay="600">
                    <div class="align-self-center text-center">
                        <a href="{{ url('/transaksi') }}"><img src="assets/icons/ic_transaksi{{ Request::is('transaksi') ? '_active' : '' }}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi </a>
                    </div>
                </li>
            @endif
            @if(auth()->user()->status === 'admin')
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="600">
                    <div class="align-self-center text-center">
                        <a href="{{url('/tagihan')}}"><img src="assets/icons/ic_bill{{ Request::is('tagihan') ? '_active' : '' }}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{url('/tagihan')}}">Tagihan </a>
                    </div>
                </li>
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="700">
                    <div class="align-self-center text-center">
                        <a href="{{url('/siswa')}}"><img src="assets/icons/ic_student{{  Request::is('siswa') ? '_active' : ''}}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{url('/siswa')}}">Siswa </a>
                    </div>
                </li>
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="700">
                    <div class="align-self-center text-center">
                        <a href="{{url('/kelas')}}"><img src="assets/icons/ic_class{{ Request::is('kelas') ? '_active' : ''}}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{url('/kelas')}}">Kelas </a>
                    </div>
                </li>
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="600">
                    <div class="align-self-center text-center">
                        <a href="{{url('/periode')}}"><img src="assets/icons/ic_date{{ Request::is('periode') ? '_active' : ''}}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{url('/periode')}}">Periode </a>
                    </div>
                </li>
                <li class="nav-item px-4 px-lg-4 px-xl-5 px-sm-1" data-aos="zoom-in" data-aos-delay="500">
                    <div class="align-self-center text-center">
                        <a href="{{url('/pengguna')}}"><img src="assets/icons/ic_user{{ Request::is('pengguna') ? '_active' : '' }}.svg" class="nav-link-icon" alt="" srcset=""></a>
                        <a class="nav-link" href="{{url('/pengguna')}}">Pengguna </a>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>
@endif