<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Rimbabiru | Kami peduli dan yakin bahwa setiap usaha yang berorientasi pada lingkungan akan memberikan keuntungan yang lebih dimasa depan    </title>
    <!-- favicons Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-v.png') }}">

    <meta name="description" content=" " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/wishon-icons/style.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }} " />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/wishon.css') }} " />
    <link rel="stylesheet" href="{{ asset('assets/css/wishon-responsive.css') }} " />

    <style>
        .main-menu-two .main-menu__list>li>a, .stricky-header.main-menu-two .main-menu__list>li>a{
            font-size:18px;
        }

        .brand-two .swiper-slide img{
            opacity: 1;
        }
    </style>

</head>

<body>


    
  
    <!-- /.preloader -->



    <div class="page-wrapper">
       
        @include('public.inc.header')


        @yield('contents')

        @php
            $about = App\Models\About::where('id', '1')->first();
        @endphp
        @php
            $sx = App\Models\Service::where('id','!=','0')->get();
        @endphp

        <!--Site Footer Start-->
        <footer class="site-footer">
           
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">

                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-v.png') }} "  width="150px;" alt=""></a>
                                <p class="footer-widget__about-text mt-5"> Rimba Biru Nusantara adalah perseroan terbatas yang didirikan untuk mendukung dan berkontribusi pada penyediaan jasa dan barang yang berorientasi lingkungan </p>
                               
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__links">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Layanan</h4>
                                </div>
                                <div class="footer-widget__links-points-box">
                                    <ul class="footer-widget__links-list list-unstyled">
                                        @foreach($sx AS $vc)
                                        <li><a href="{{ route('public.whatWeDo') }}"> {{ $vc->title }} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__non-profit">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Laman</h4>
                                </div>
                                <ul class="footer-widget__non-profit-list list-unstyled">
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__contact">
                                <div class="footer-widget__title-box">
                                    <h4 class="footer-widget__title">Kontak</h4>
                                </div>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com "> {{ $about->email }}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-mobile"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:13077760608"> {{ $about->phone }}</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-mobile"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:13077760608"> {{ $about->mobile }}</a></p>
                                        </div>
                                    </li>
                                </ul>
                                <p class="footer-widget__contact-text icon">   <i class="fas fa-map-marker"></i> {{ $about->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom">
                                <div class="site-footer__bottom-inner">
                                    <p class="site-footer__bottom-text">©{{ date('Y') }}. <a href="#">Rimbabiru</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                {{-- <a href="index-2.html" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-2.png') }}" width="145" alt="" /></a> --}}
                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo-v.png') }} " style="filter:brightness(0) invert(1);" width="150px;" alt=""></a>

            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }} "></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }} "></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }} "></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }} "></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }} "></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }} "></script>
    <script src="{{ asset('assets/vendors/sidebar-content/jquery-sidebar-content.js') }} "></script>




    <!-- template js -->
    <script src="{{ asset('assets/js/wishon.js') }} "></script>
</body>

</html>