<header class="main-header-two">       
    <nav class="main-menu main-menu-two">
        <div class="main-menu-two__wrapper">
            <div class="container" style="max-width: 1500px;">
                <div class="main-menu-two__wrapper-inner">
                    <div class="main-menu-two__left">
                        <div class="main-menu-two__logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-v.png') }} " style="filter:brightness(0) invert(1);" width="150px;" alt=""></a>
                        </div>
                    </div>
                    <div class="main-menu-two__right">
                        <div class="main-menu-two__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">

                                <li><a class="#" href="{{ route('home') }}">Beranda </a>

                                </li>
                                <li><a href="{{ route('public.about.whoWeAre') }}">Tentang Kami  </a>
                                </li>
                                <li><a href="{{ route('public.whatWeDo') }}">Layanan</a></li>
                                <li><a href="{{ route('public.projects') }}">Projek  </a> </li>
                                <li><a href="{{ route('public.news') }}">Blog </a></li>
                                {{-- <li><a class="" href="{{ route('public.faq') }}">FAQ </a> --}}
                                <li><a class="" href="{{ route('public.contact') }}">Kontak </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->


