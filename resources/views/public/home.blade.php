@extends('layouts.guest')
@section('contents')
<style>

#myVideo{
        position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

.video-slide::before {
    position: absolute;
    background: linear-gradient(225deg, rgb(0 66 161 / 69%) 41%, rgb(0 66 161) 100%) !important;
    z-index: 1;
    top: 0;
    left: 0;
    content: "";
    width: 100%;
    height: 100%;
    background-color: rgb(74 149 86 / 82%);
}


.feature-one__single{
    background-image: -webkit-linear-gradient(90deg, rgb(255, 255, 255) 0%, rgb(242 180 43) 100%);
}
  
.tackling-one__bg{
    opacity: 1;
}
</style>

        <!--Main Slider Two Start-->
        <section class="main-slider-two">
       
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 10000
            }}'>

                <div class="swiper-wrapper">

                   
                    <div class="swiper-slide">
                        {{-- <div class="image-layer-two" style="background-image: url({{ asset('uploads/slide/'.$item->images.'') }});"></div> --}}
                        <div class="video-slide">
                            <video autoplay="" muted="" loop="" id="myVideo" style="" class="zoomtofill">
                                <source src="{{ asset('uploads/slide/slide.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">RIMBA BIRU </p>
                                        <h4 class="main-slider-two__title">Laut dan Lingkungan <br> Untuk Kita Semua.
                                        </h4>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn-one">Layanan Kami</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @foreach ($slides as $item)
                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image: url({{ asset('uploads/slide/'.$item->images.'') }});"></div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">RIMBA BIRU </p>
                                        <h4 class="main-slider-two__title">Laut dan Lingkungan <br> Untuk Kita Semua.
                                        </h4>
                                        <div class="main-slider-two__btn-box">
                                            <a href="#" class="thm-btn main-slider__btn-one">Layanan Kami</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider Two End-->

      
              <!--Welcome One Start-->
              <section class="welcome-one">
                <div class="welcome-one__shape-1 float-bob-y">
                    <img src="assets/images/shapes/welcome-one-shape-1.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="welcome-one__left">
                                <div class="welcome-one__img-3">
                                    
                                </div>
                                <div class="welcome-one__img-box">
                                    <div class="welcome-one__img">
                                        <img src="assets/images/welcome1.png" alt="">
                                    </div>
                                    <div class="welcome-one__img-2">
                                        <img src="assets/images/welcome2.jpg" style="width:450px;" alt="">
                                    </div>
                                    <div class="welcome-one__big-text-two" style="font-size: 60px;">rimbabiru</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="welcome-one__right">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Selamat Datang di RimbaBiru </span>
                                    <h2 class="section-title__title">Tentang Kami </h2>
                                </div>
                                <p class="welcome-one__text-1">
                                    {!! $about->vission !!}
                                </p>
                                <p class="welcome-one__text-2">
                                {!! $about->profile !!}
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Welcome One End-->
            

            <!--Feature Four Start-->
            <section class="causes-one causes-two" style="padding-top:100px;     background: #0042a1; border-radius: 0px 100px 0px 0px; margin-top: 50px;">
                <div class="container">

                    <div class="section-title text-center" style="margin-bottom:150px;">
                        <span class="section-title__tagline text-white">Kami peduli dan yakin bahwa setiap usaha yang berorientasi pada lingkungan akan memberikan keuntungan yang lebih dimasa depan  </span>
                        <h2 class="section-title__title text-white">Layanan Kami </h2>
                    </div>


                    <div class="row">
                        @foreach ($services as $item)
                        <!--Featue Four Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-one__single">
                            <div class="feature-one__img">
                                <img src="{{ asset('uploads/service/'.$item->icon.'') }}" class="w-100" alt="">
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title"><a href="cause-details.html"> {{ $item->name }} </a></h3>
                                <p class="feature-one__text">{{ $item->desc }}.</p>
                            </div>
                        </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!--Feature Four End-->


        <!--Causes Two Start-->
        <section class="causes-one causes-two featured-campaigns">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Project Kami </h2>
                </div>

                <div class="row">
                    @foreach ($projects as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img-box">
                                <div class="causes-one__img">
                                    <img src="{{ asset('uploads/project/'.$item->cover.' ') }} " alt="" style="width: 100%; height:250px; object-fit:cover;">
                                </div>
                                <div class="causes-one__category">
                                    <span>{{ $item->status }}</span>
                                </div>
                                <div class="causes-one__border-box"></div>
                            </div>
                            <div class="causes-one__content">
                                <div class="causes-one__title-box">
                                    <h3 class="causes-one__title"><a href="{{ route('public.project_detail',[$item->id, Str::slug($item->title)] ) }}"> {{ $item->title }} </a></h3>
                                </div>
                               
                                <div class="causes-one__btn-box mt-3">
                                    <a href="{{ route('public.project_detail',[$item->id, Str::slug($item->title)] ) }}" class="causes-one__btn thm-btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--Causes Two End-->

        <!--Tackling One Start-->
        <section class="tackling-one">
            <div class="tackling-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('uploads/slide/28072023071532-images.jpg') }});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="tackling-one__left">
                            <div class="tackling-one__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="tackling-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h3 class="tackling-one__title">Kami peduli dan yakin bahwa setiap usaha yang berorientasi pada lingkungan akan memberikan keuntungan yang lebih dimasa depan
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tackling One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Blog</h2>
                </div>
                <div class="row">

                    @foreach($news AS $item)
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{ asset('uploads/news/'.$item->image.'') }} " style="height:300px; width:100%; object-fit:cover;" alt="">
                                </div>
                            </div>
                            <div class="blog-one__content-box">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-calendar"></i> {{ tgl_indo($item->created_at) }} </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('public.newsDetail',[$item->id, Str::slug($item->title)] ) }}">{{ $item->title }} </a></h3>
                                <div class="blog-one__read-more">
                                    <a href="{{ route('public.newsDetail',[$item->id, Str::slug($item->title)] ) }}"> <span class="fa fa-angle-right"></span>Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single Start-->
                    @endforeach


                </div>
            </div>
        </section>
        <!--Blog One End-->


        <!--Brand Two Start-->
        <section class="brand-two">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Mitra Kami</h2>
                </div>

                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        @foreach($partnert AS $val)
                        <div class="swiper-slide">
                            <img src="{{ asset('uploads/partnert/'.$val->logo.'') }} " alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--Brand Two End-->




             <!--CTA One Start-->
             <section class="cta-one" style="margin-bottom:50px;">
                <div class="cta-one__wrap">
                    <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-one-bg-img.png);">
                    </div>
                    <div class="container">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-support"></span>
                                </div>
                                <h3>Ayo ikut memberikan dampak <br> bagi lingkungan dan laut kita. </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--CTA One End-->
            



@endsection