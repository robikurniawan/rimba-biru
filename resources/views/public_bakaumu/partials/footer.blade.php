   {{-- style="background-color:#101820" --}}
   @php
       $about = App\Models\About::find(1);
   @endphp
   <footer class="footer-area pos-rel green-bg pt-40" style="background-color:#101820">
        <div class="container">
            <div class="row  pb-40">
                <div class="col-xl-12 col-lg-12 col-md-6 mb-3">
                    <div class="footer__widget ">
                        <a href="#" class="footer-logo ">
                            <img src="{{ asset('uploads/bg/logo-bakaumu.png') }}" width="200px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__widget mb-30">
                        <h5 class="mb-20">About Us</h5>
                         <ul class="fot-list">
                                <li><a href="{{ route('public.about.whoWeAre') }}">Who We Are</a></li>
                                <li><a href="{{ route('public.about.whoWeAre') }}">Letter </a></li>
                                <li><a href="{{ route('public.about.whoWeAre') }}">Vision & Mission</a></li>
                                <li><a href="{{ route('public.teams') }}">Our Teams</a></li>

                            </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__widget mb-30">
                        <h5 class="mb-20">Information</h5>
                        @php $infoCategory = App\Models\CategoryInfo::all(); @endphp


                         <ul class="fot-list">
                                @foreach ($infoCategory as $val )
                                <li><a href="{{ route('public.info',[enc($val->id), Str::slug($val->name)]) }}">{{ $val->name }}</a></li>
                                @endforeach
                                 <li><a href="{{ route('public.whatWeDo') }}">What We Do</a></li>
                                 <li><a href="{{ route('public.projects') }}">Projects</a></li>
                                <li><a href="#">F.A.Q</a></li>

                            </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__widget mb-30">
                        <h5 class="mb-20">Contact Us</h5>
                            <ul class="fot-list">
                                <li class="text-white"><i class="fa-solid fa-location-dot"></i> {{ $about->address }}</li>
                                <li class="text-white"><i class="fa-solid fa-envelope"></i> {{ $about->email }}</li>
                                <li class="text-white"><i class="fa-solid fa-square-phone"></i> {{ $about->phone }}</li>
                                <li class="text-white"><i class="fa-solid fa-square-phone"></i> {{ $about->mobile }}</li>
                                <li class="text-white"><i class="fa-solid fa-fax"></i> {{ $about->fax }}</li>
                            </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer__widget mb-30">
                        <h5 class="mb-20">Follow Us </h5>

                        <h2>
                             <a href="#"><i class="fa-brands fa-facebook text-white"></i></a>
                             <a href="#"><i class="fa-brands fa-twitter text-white"></i></a>
                             <a href="#"><i class="fa-brands fa-youtube text-white"></i></a>
                             <a href="#"><i class="fa-brands fa-instagram text-white"></i></a>
                             <a href="#"><i class="fa-brands fa-linkedin text-white"></i></a>
                        </h2>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright text-center pt-30 pb-10 green-bg" style="background-color:#101820" >
                        <p>Made with <i class="fa fa-heart text-danger"></i> © Copyright 2022 - {{ date('Y') }} <a href="#">BakauMu</a> <br> All rights reserved. </p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
