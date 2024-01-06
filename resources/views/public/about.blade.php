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
                <li>About</li>
            </ul>
            <h2>About us</h2>
        </div>
    </div>
</section>

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
    

    <section class="fundraising-one fundraising-three" style="margin-top:0px;">
        <div class="fundraising-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(uploads/slide/28072023072722-images.jpg);"></div>
        <div class="container">
            <div class="fundraising-one__inner">
                <p class="fundraising-one__sub-title">Visi Kami </p>
                <h3 class="fundraising-one__title">
                    {{ $about->vission }}
                </h3>

                <div class="card" style="border-radius:20px; padding:30px;">
                    <div class="card-body" style="text-align: left;">
                        <h3 class="mb-3">Misi</h3>
                        {!! $about->mission !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fundraising One End-->

    <section class="team-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Join Our Team</span>
                <h2 class="section-title__title">Tim Kami</h2>
            </div>
            <div class="row">
                <!--Team One Single Start-->
                @foreach ($teams as $item)
                <div class="col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ asset('uploads/team/'.$item->ava.'') }}" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <h3 class="team-one__name"><a href="#"> {{ $item->name }} </a></h3>
                            <p class="team-one__sub-title">{{ $item->position }}</p>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>



@endsection