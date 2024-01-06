@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel"
    style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="contact-info-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="section-title text-center mb-80 ml-55">
                    <span class="mb-15">Contact Info</span>
                    <h2 class="mb-30">Don’t Hesited To
                        Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="contact pos-rel pt-25 pl-45 mb-40">
                    <h3>Email Us</h3>
                    <a href="#"><i class="far fa-envelope-open"></i> {{ $about->email }} </a>
                    <span><i class="far fa-envelope-open"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="contact pos-rel pt-25 pl-45 mb-40">
                    <h3>Location</h3>
                    <a href="#"><i class="fa fa-map-marked-alt"></i> {{ $about->address }}</a>
                    <span><i class="fa fa-map-marked-alt"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="contact pos-rel pt-25 pl-45 mb-40">
                    <h3>Phone Us</h3>
                    <a href="#"><i class="fal fa-phone"></i> {{ $about->mobile }}</a> <br>
                    <a href="#"><i class="fal fa-mobile"></i> {{ $about->phone }}</a>
                    <span><i class="fa-solid fa-tty"></i></span>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="contact pos-rel pt-25 pl-45 mb-40">
                    <h3>Media Social</h3>
                    <p><a href="#"><i class="fa fa-instagram"></i> @bakaumu </a> </p>
                    <span><i class="fa fa-map-marked-alt"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-info-area end-->
<!--cta-area start-->
<section class="cta-area grey-bg pos-rel pb-75">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 ">
                <div class="section-title text-left pt-80">
                    <span class="mb-15">Get In Touch</span>
                    <h2 class="mb-30">Send Us A Message</h2>
                </div>
                <div class="form-area form-area-03 row pr-105">
                    <div class="col-md-6 col-12">
                        <div class="contact-name4 pos-rel mb-30">
                            <input type="text" class="form-control" placeholder="Full Name Here">
                            <span><i class="fal fa-user"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="contact-mail3 pos-rel mb-30">
                            <input type="text" class="form-control" placeholder="Email Here">
                            <span><i class="fal fa-envelope-open"></i></span>
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="contact-subject4 pos-rel mb-30">
                            <input type="text" class="form-control" placeholder="Subject">
                            <span class="pos-abl"><i class="far fa-chevron-down"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-message4 pos-rel mb-30">
                            <textarea name="message" id="message" placeholder="Comments"></textarea>
                            <span><i class="fal fa-pencil"></i></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="#" class="theme_btn">Send message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="cta-map-area">
            <div class="contact-map">
                <div id="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.55582029711!2d106.8294055!3d-6.2783274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62f1224f8bcd53b2!2sPT%20Tetra%20Pak%20Indonesia!5e0!3m2!1sen!2sid!4v1650805819955!5m2!1sen!2sid" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>



@endsection
