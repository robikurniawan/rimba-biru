@extends('layouts.guest')
@section('content')
<style>
    p{
        font-size: 18px;
    }

    .section-title li {
        list-style: auto;
        font-size: 18px;
    }
</style>
<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="section-title pl-45 mb-30">
                    <span class="left-line mb-15 pl-20">Letter from bakaumu foundation. </span>
                    <h2 class="mb-35">Greetings</h2>
                    <p class="mb-30" style="text-align: justify;">
                        {!! Str::substr($about->letter,0,350) !!}....
                    </p>
                    <a href="#" data-toggle="modal" data-target="#my-modal" class="theme_btn">read more</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about__img__box pos-rel mb-30 ">
                    <img class="img-fluid landco-img mt-50" src="{{  asset('uploads/team/teans.jpg') }}" width="100%"
                        style="border-radius: 30px;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="chose-us-area-02 green-bg pos-rel pt-125 pb-60">
    <div class="video pos-abl" style=" background-image: url({{ asset('uploads/bg/bg-bakaumu-video.jpeg') }});">
        <div class="video__icon pos-abl">
            <a href="https://www.youtube.com/watch?v=JbSS0yBkTvo" class="popup-video video-play"><i class="fas fa-play"></i></a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 offset-xl-6 offset-lg-6 col-12">
                <div class="provide-wrapper provide-wrapper-02 pr-70">
                    <div class="section-title pl-70 section-title-white mb-60">
                        <span class="left-line mb-15 pl-20">About Us</span>
                        <h2 class="mb-40">Who We Are </h2>
                        <p class="mb-15">
                            {!! $about->profile !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class=" pb-95 pt-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-title mb-30">
                    <span class="left-line mb-15 pl-20">Our Vision & Mission </span>
                    <h3 class="mb-35">{!! $about->vission !!}</h3>
                    {!! $about->mission !!}
                </div>
            </div>
        </div>
    </div>
</section>




<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width:1200px !important;" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 1px solid #e9ecef00;">
                <button class="close" style="padding:2rem;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-title pl-45 mb-30">
                            <span class="left-line mb-15 pl-20">Letter from bakaumu foundation. </span>
                            <h2 class="mb-35">Greetings</h2>
                            <p class="mb-30" style="text-align: justify;">
                                {!! $about->letter !!}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
