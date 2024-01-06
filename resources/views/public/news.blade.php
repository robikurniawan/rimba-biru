@extends('layouts.guest')
@section('contents')
<style>
  
    .inspire-one__wrap{
        background: #0042a1;
    }

    .inspire-one__left{
        height: 50vh;
    }
</style>


<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('uploads/slide/28072023071532-images.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index-2.html">Home</a></li>
                <li><span>/</span></li>
                <li>Blog</li>
            </ul>
            <h2>Blog</h2>
        </div>
    </div>
</section>

<section class="welcome-one">
    <div class="container">
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


@endsection