 <header id="top-menu" class="nav-down">
     <div class="main-header-area transparent-header grey-bg ">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-xl-2 col-lg-10 col-md-4 col-6">
                     <div class="logo logo-2 pt-20">
                         {{-- <a href="index-2.html"><img src="{{ asset('front/assets/img/logo/foter-logo1.png') }}"
                         alt=""></a> --}}
                         <a href="{{ route('home') }}"><img src="{{ asset('uploads/bg/logo-bakaumu.png') }}" width="150" alt=""></a>
                     </div>
                 </div>
                 <div class="col-xl-10 col-lg-10 col-md-4 d-none d-md-block">
                     <div class="main-menu-area text-right">
                         <div class="main-menu menu-02 d-none d-lg-inline-block d-lg-none">
                             <nav>
                                 <ul>
                                     <li><a class="#" href="{{ route('home') }}">Home </a>

                                     </li>
                                     <li><a href="#">About Us <i class="fa fa-chevron-down"></i> </a>
                                         <ul class="submenu">
                                             <li><a href="{{ route('public.about.whoWeAre') }}">Who We Are</a></li>
                                             <li><a href="{{ route('public.about.whoWeAre') }}">Letter</a></li>
                                             <li><a href="{{ route('public.about.whoWeAre') }}">Vision & Mission</a>
                                             </li>
                                             <li><a href="{{ route('public.teams') }}">Our Team</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ route('public.whatWeDo') }}">What We Do</a></li>
                                     <li><a href="{{ route('public.projects') }}">Projects</a> </li>
                                     <li><a href="#">News Room <i class="fa fa-chevron-down"></i> </a>
                                         <ul class="submenu">
                                             @php
                                             $newsCategory = App\Models\CategoryNews::all();
                                             @endphp
                                             @foreach ($newsCategory as $val )
                                             <li><a
                                                     href="{{ route('public.news',[enc($val->id), Str::slug($val->name)]) }}">{{ $val->name }}</a>
                                             </li>
                                             @endforeach
                                         </ul>
                                     </li>
                                     <li><a href="#">Knowledge <i class="fa fa-chevron-down"></i> </a>
                                         <ul class="submenu">
                                             @php
                                             $infoCategory = App\Models\CategoryInfo::all();
                                             @endphp
                                             @foreach ($infoCategory as $val )
                                             <li><a
                                                     href="{{ route('public.info',[enc($val->id), Str::slug($val->name)]) }}">{{ $val->name }}</a>
                                             </li>
                                             @endforeach
                                         </ul>
                                     </li>
                                     <li><a class="" href="{{ route('public.faq') }}">FAQ </a>
                                     <li><a class="" href="{{ route('public.contact') }}">Contact </a>



                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-1 col-lg-1 col-md-4 col-6">
                     <div class="hamburger-menu d-block d-xl-none pr-55">
                         <a href="javascript:void(0);">
                             <i class="fa fa-bars"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>

 <aside class="slide-bar">
     <div class="close-mobile-menu d-block">
         <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
     </div>

     <!-- side-mobile-menu start -->
     <nav class="side-mobile-menu d-block">
         <ul id="mobile-menu-active">
             <li>
                 <a href="{{ route('home') }}">Home</a>
             </li>
             <li class="has-dropdown">
                 <a href="#">About Us</a>
                 <ul class="sub-menu">
                     <li><a href="{{ route('public.about.whoWeAre') }}">Who We Are</a></li>
                     <li><a href="{{ route('public.about.whoWeAre') }}">Letter</a></li>
                     <li><a href="{{ route('public.about.whoWeAre') }}">Vision & Mission</a></li>
                     <li><a href="{{ route('public.teams') }}">Our Team</a></li>
                 </ul>
             </li>
             <li><a href="{{ route('public.whatWeDo') }}">What We Do</a></li>
             <li><a href="{{ route('public.projects') }}">Projects</a> </li>
             <li><a href="#">News Room <i class="fa fa-chevron-down"></i> </a>
                 <ul class="has-dropdown">
                     @php
                     $newsCategory = App\Models\CategoryNews::all();
                     @endphp
                     @foreach ($newsCategory as $val )
                     <li><a
                             href="{{ route('public.news',[enc($val->id), Str::slug($val->name)]) }}">{{ $val->name }}</a>
                     </li>
                     @endforeach
                 </ul>
             </li>
             <li><a href="#">Knowledge <i class="fa fa-chevron-down"></i> </a>
                 <ul class="has-dropdown">
                     @php
                     $infoCategory = App\Models\CategoryInfo::all();
                     @endphp
                     @foreach ($infoCategory as $val )
                     <li><a
                             href="{{ route('public.info',[enc($val->id), Str::slug($val->name)]) }}">{{ $val->name }}</a>
                     </li>
                     @endforeach
                 </ul>
             </li>
             <li><a class="" href="{{ route('public.faq') }}">FAQ </a>
             <li><a class="" href="{{ route('public.contact') }}">Contact </a>

         </ul>
     </nav>
     <!-- side-mobile-menu end -->
 </aside>
