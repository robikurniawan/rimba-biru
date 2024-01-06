@extends('layouts.guest')
@section('content')

<!--slider-area start-->
<div class="slider-area slider-area-03 pos-rel">
    <div class="slider-shape-h4 d-none d-xl-block pos-abl"><img src="{{ asset('front/assets/img/icon/net.png') }}"
            alt=""></div>
    <div class="single-slider slider-height-03 pos-rel d-flex align-items-center" style='
    background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat;
    background-size: cover;'>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-6">
                    <div class="slider__content slider_content_03 mt-50">
                        {{-- style="font-size:85px;" --}}
                        <h1  class="mb-45 wow fadeInUp animated" data-delay=".2s">
                            Belajar <br> Berbagi <br> Bergerak Bersama
                        </h1>
                        <p class="mb-35 wow fadeInUp animated" data-delay=".7s">Berusaha menjadi
                            yayasan
                            yang memiliki standar kelas dunia yang diakui atas profesionalisme dan
                            integritas yang didedikasikan untuk memajukan dan menjaga keseimbangan lingkungan
                            hidup. </p>
                        <ul class="btn-list">
                            <li><a class="theme_btn wow fadeInUp animated" href="{{ route('public.about.whoWeAre') }}" data-delay=".9s">About Us </a></li>
                            <li><a class="theme_btn border_btn wow fadeInUp animated" href="{{ route('public.contact') }}"
                                    data-delay=".8s">Contact </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--slider-area start-->

<!--faq-area start-->
<section class="faq-area pt-130 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="videos pos-rel mb-30">
                    <div class="videos__thumb pos-rel">
                        <img src="{{ asset('uploads/bg/bg-bakaumu-video.jpeg') }}"
                            width="100%" style="border-radius: 60px;" alt="">
                    </div>
                    <div class="video__icon videos__icons pos-abl">
                        <a href="https://www.youtube.com/watch?v=JbSS0yBkTvo" class="popup-video popup-02"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="faq-wrapper ">
                    <div class="section-title text-left mb-30">
                        <span class="mb-15">Who We Are</span>
                        <h2 class="mb-30">About Us</h2>
                    </div>
                    <div class="desc">{!! Str::substr($about->profile,0,330) !!}</div>
                    <a class="theme_btn wow fadeInUp animated mt-4" href="{{ route('public.about.whoWeAre') }}" data-delay=".9s">Learn More.
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--work-process-area start-->
<section class="work-process-area grey-bg pt-115 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="section-title text-center mb-70">
                    <span class="mb-15">Our Working Process</span>
                    <h2 class="mb-30">How We Work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service )


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="process text-center mb-30 ">
                    <div class="process__icon pr-icon pos-rel mb-25">
                        <img src="{{ asset('uploads/service/'.$service->icon.'') }}" alt="">
                        <div class="process__icon--number pos-abl">{{ $loop->iteration }}</div>
                    </div>
                    <div class="process__text">
                        <h5>{{  $service->name  }} </h5>
                        <p>{!! $service->desc !!}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--work-process-area end-->

<section class="counter-area green-bg pt-100 pb-90" style="">
    <div class="shape-one">
        <img class="counte-rimg d-none d-md-block" src="{{  asset('front/assets/img/icon/leaf3.png') }}" alt="">
    </div>
    <div class="shape-two">
        <img class="counte-rimg-two" src="assets/img/icon/leaf4.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="counter__box text-center mb-30">
                    <h1 class="mb-20"><span class="counter">+1200</span></h1>
                    <h4 class="mb-15 text-white">Mangrove Rehabilitated</h4>
                    {{-- <p>Professional Gardening</p> --}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="counter__box text-center mb-30">
                    <h1 class="mb-20"><span class="counter">32</span></h1>
                    <h4 class="mb-15 text-white">Supporting Partnert</h3>
                    {{-- <p>Professional Gardening</p> --}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="counter__box text-center mb-30">
                    <h1 class="mb-20"><span class="counter">26</span></h1>
                    <h4 class="mb-15 text-white">Project Location</h3>
                    {{-- <p>Professional Gardening</p> --}}
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="counter__box text-center mb-30">
                    <h1 class="mb-20"><span class="counter">1203</span></h1>
                    <h4 class="mb-15 text-white">Project Beneficiaries</h3>
                    {{-- <p>Professional Gardening</p> --}}
                </div>
            </div>
        </div>
    </div>
</section>





</section>
<!--latest-service-area end-->
<!--company-statistic start-->
<section class="company-statistics-area pt-150 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-title text-left mb-50 pr-70">
                    <span class="mb-15">Recent Update</span>
                    <h2 class="mb-35">Latest News</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-left: 60px; padding-right:60px;">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="owl-carousel">
                    @foreach ($news as $update)
                    <div class="item">
                        <div class="teams text-center pos-rel mb-30" style="border-radius:30px;">
                            <a href="{{ route('public.newsDetail',[enc($update->id),Str::slug($update->title)] ) }}">
                                <div class="teams__imgs pos-rel mb-30">
                                    <img src="{{ asset('uploads/news/'.$update->image.'') }}" style="height:500px; object-fit:cover;" class=" img-fluid" alt="">
                                </div>
                            </a>
                            <div class="teams__contents pos-abl">
                                <div class="team__name teams__names text-left">
                                    <h4 style="line-height: 1.5; color:#fff;"><a href="#"> {{ $update->title }}</a></h4>
                                    <div class="blog__content--meta mb-10">
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>
                                            {{ tgl_indo($update->created_at) }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



<section class="company-statistics-area grey-bg pt-90 pb-150">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 offset-xl-3">
                <div class="section-title text-center mb-70">
                    <span class="mb-15">Project Tree</span>
                    <h2 class="mb-30">Our Projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $item)


            <div class="col-md-4">
                <div class="teams text-center pos-rel mb-30" style="border-radius:30px; z-index:10;">
                    <a href="{{ route('public.project_detail',enc($item->id)) }}">
                        <div class="teams__imgs pos-rel mb-30">
                            <img src="{{ asset('uploads/project/'.$item->cover.'') }}"
                                style="height:400px; object-fit:cover;" class=" img-fluid" alt="">
                        </div>
                        <div class="teams__contents pos-abl" style="bottom:5px;">
                            <div class="team__name teams__names text-left" style="padding:5px;">
                                <h6 style="line-height: 1.5; ">
                                    <a href="{{ route('public.project_detail',enc($item->id)) }}">
                                    {{ Str::ucfirst(Str::lower($item->title)) }}</h6>
                                    </a>
                                <p>
                                    <i class="fa fa-map-marker"></i> {{ $item->location }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>

<section class="company-statistics-area  pt-90 pb-150">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-xl-6 offset-xl-3">
                <div class="section-title text-center mb-70">
                    <span class="mb-15">Research & Development</span>
                    <h2 class="mb-30">Knowledge Center</h2>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-3 mb-3">
                <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                    @foreach ($category as $item)
                    <li class="nav-item">
                        <a class="nav-link {{ ($loop->iteration == 1) ? "active":"" }}" id="home-tab-{{ $item->id }}"
                            data-toggle="tab" href="#home{{ $item->id }}" role="tab" aria-controls="home"
                            aria-selected="true"> <i class="fa fa-tree"></i> {{ $item->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-9">
                <div class="tab-content" id="myTabContent">
                    @foreach ($category as $item)
                    <div class="tab-pane fade {{ ($loop->iteration == 1) ? "show active":"" }}" id="home{{ $item->id }}"
                        role="tabpanel" aria-labelledby="home-tab-{{ $item->id }}">
                        <h2>{{ $item->name }}</h2>
                        <div>
                            <table class="table mt-4">
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Judul</th>
                                    <th></th>
                                </tr>
                                @php
                                $get = \App\Models\Info::where('category_info_id',$item->id)->orderBy('id','DESC')->limit(8)->get();
                                @endphp
                                @foreach ($get as $data)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#m_{{ $data->id }}" class="" style="color:#0d3c00; font-weight:bold; font-size:18px;">
                                            {{ $data->title }}
                                        </a>

                                        <div id="m_{{ $data->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
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
                                                                    <span class="left-line mb-15 pl-20">{{ $item->name }}. </span>
                                                                    <h2 class="mb-35" style="font-size: 40px"> {{ $data->title }}</h2>
                                                                    <p class="mb-30" style="text-align: justify;">
                                                                        {!! $data->desc !!}
                                                                    </p>
                                                                    <a href="{{ asset('uploads/info/'.$data->attach.'') }}" target="_blank" class="mt-2 btn btn-lg btn-warning"> Download  </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                @endforeach
                            </table>
                            <div class="mt-3">
                                <a href="{{ route('public.info',[enc($item->id), Str::slug($item->name)]) }}" ><b> Selengkapnya...</b> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
    </div>
</section>

{{-- <section class="testimonial-area-three green-bg pos-rel pt-115 pb-120">
    <div class="testimonial-shape-one pos-abl"><img src="{{ asset('front/assets/img/icon/leaf21.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="section-title text-left mb-80">
                    <span class="mb-15">Clients Testimonials</span>
                    <h2 class="mb-30">What People’s Say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="testimonial-active-02">
                    <div class="testimonials-item mb-30">
                        <div class="testimonials">
                            <div class="testimonials__inner text-left mb-30 pr-80">
                                <div class="quote-icon mb-30">
                                    <img src="{{ asset('front/assets/img/testimonial/quote.png') }}" alt="">
                                </div>
                                <p class="mb-20">Perspiciatis unde omnis iste natus error
                                    voluptatem accusantium doloremque laudantium totamre aperiam eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explica
                                    Nemo enim ipsam voluptatem</p>
                                <div class="author-name pl-70">
                                    <h4 class="line pos-rel">Michel Zekolin Doe</h4>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item mb-30">
                        <div class="testimonials">
                            <div class="testimonials__inner text-left mb-30 pr-80">
                                <div class="quote-icon mb-30">
                                    <img src="{{ asset('front/assets/img/testimonial/quote.png') }}" alt="">
                                </div>
                                <p class="mb-20">Perspiciatis unde omnis iste natus error
                                    voluptatem accusantium doloremque laudantium totamre aperiam eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explica
                                    Nemo enim ipsam voluptatem</p>
                                <div class="author-name pl-70">
                                    <h4 class="line pos-rel">Michel Zekolin Doe</h4>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-item mb-30">
                        <div class="testimonials">
                            <div class="testimonials__inner text-left mb-30 pr-80">
                                <div class="quote-icon mb-30">
                                    <img src="{{ asset('front/assets/img/testimonial/quote.png') }}" alt="">
                                </div>
                                <p class="mb-20">Perspiciatis unde omnis iste natus error
                                    voluptatem accusantium doloremque laudantium totamre aperiam eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                    explica
                                    Nemo enim ipsam voluptatem</p>
                                <div class="author-name pl-70">
                                    <h4 class="line pos-rel">Michel Zekolin Doe</h4>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="tools-img pos-rel mb-30">
                    <img src="https://lelogama.go-jek.com/prime/upload/image/aboutus_-_Join_the_ride.svg" alt=""
                        style="transform:scaleX(-1)">
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!--partner-area start-->
<section class="partner-area partner-two ">
    <div class="partner-bg p-bg-02 pos-rel pos-rel pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title text-center mb-80">
                        <span class="mb-15">Our Partners</span>
                        <h2 class="mb-30">We Are Trusted</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="partner-active">
                        @foreach ($partnert as $val )

                        <div class="partner text-center mb-30">
                            <a href="#" class="partner__img">
                                <img src="{{ asset('uploads/partnert/'.$val->logo.'') }}" alt="">
                            </a>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--partner-area end-->





<script>
    $(document).ready(function () {

        var Lowl = $(".owl-carousel");

        Lowl.owlCarousel({
            // center: true,
            items: 4,
            margin: 20,
            nav: true,
            // loop:true,
            rewindNav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: false,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3.5
                }
            }
        })

        $(".next").click(function () {
            Lowl.trigger('owl.next');
        });

        $(".prev").click(function () {
            Lowl.trigger('owl.prev');
        });

        Lowl.trigger('owl.play', false);



    });

</script>

@endsection
