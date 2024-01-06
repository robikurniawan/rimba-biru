@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel"
    style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>F A Q</h2>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="contact-info-area pt-120 pb-80">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="faq__content ml-35">
                    <div class="section-title text-left mb-45">
                        <span class="mb-15">Have Any Questions?</span>
                        <h2 class="mb-30">Frequently Asked Questions</h2>
                    </div>
                    <div class="service-box mb-70">

                        <div class="accordion mb-40" id="accordionOne">

                                @foreach ($faq as $item)

                                 <div class="card">
                                <div class="card-header" id="heading{{ $item->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                                            {{ $item->questions }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $item->id }}" class="collapse" aria-labelledby="heading{{ $item->id }}"
                                    data-parent="#accordionOne">
                                    <div class="card-body d-md-flex">
                                        <div class="author-img mr-20">
                                            <img src="assets/img/process/faq2.jpg" alt="">
                                        </div>
                                        {{ $item->response }}
                                    </div>
                                </div>
                                </div>
                                 @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <section class="news-letter-area pos-rel" style="background-image: url({{ asset('uploads/bg/bg-bakaumu-video.jpeg') }}); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="section-title section-title-white pt-130 text-center mb-80">
                                <span class="mb-15">Get Free Consultations</span>
                                <h2 class="mb-45">Need Any Helps For Gardening
                                    Growth & Buildup</h2>
                                <a href="{{ route('public.contact') }}" class="theme_btn theme_btn2">Get a quote</a>
                                <a href="{{ route('public.about.whoWeAre') }}" class="theme_btn theme_btn2 active">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
