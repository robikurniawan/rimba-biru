@extends('layouts.guest')
@section('contents')



<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('uploads/slide/28072023071532-images.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>/</span></li>
                <li>Kontak</li>
            </ul>
            <h2>Kontak</h2>
        </div>
    </div>
</section>


    <!--Google Map Start-->
    <section class="google-map-two" style="margin-bottom:100px;">
        <div class="container">
            <div class="google-map-two__box">

                    <iframe  class="google-map-two__map"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.508818070643!2d106.831116!3d-6.213883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4088c56757d%3A0x253f935e5b0a44fd!2sGedung%20Wirausaha!5e0!3m2!1sid!2sid!4v1690959566166!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="google-map-two__bottom">
                <ul class="google-map-two__bottom-list list-unstyled">
                    <li>
                        <div class="icon">
                            <span class="fas fa-envelope-open"></span>
                        </div>
                        <div class="content">
                            <p><a href="mailto:needhelp@company.com"> {{ $about->email }} </a></p>
                            <p><a href="mailto:info@company.com">{{ $about->linkedin }}</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-phone"></span>
                        </div>
                        <div class="content">
                            <p><a href="tel:{{ $about->phone }}"> {{ $about->phone }} </a></p>
                            <p><a href="tel:{{ $about->phone }}"> {{ $about->mobile }} </a></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="fas fa-map"></span>
                        </div>
                        <div class="content">
                            <p>{{ $about->address }} </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Google Map End-->




@endsection