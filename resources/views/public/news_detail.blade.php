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
                <li><span>/</span></li>
                <li>{{ $news->title }}</li>
            </ul>
            <h2>{{ $news->title }} </h2>


            <ul class="list-unstyled blog-one__meta mt-4">
                <li><a href="#"  class="text-white"><i class="far fa-user-circle"></i>   Admin</a> </li>
                <li><a href="#" class="text-white"><i class="fas fa-calendar"></i> {{ tgl_indo($news->created_at) }} </a> </li>
            </ul>

            

        </div>

      
    </div>

</section>

<section class="welcome-one">
    <div class="container">
        <img src="{{ asset('uploads/news/'.$news->image.'') }}" style="width:100%; border-radius:30px; margin-top:-200px;"  alt="">
       
        <div class="row mt-5">
            <div class="col-12">
                {!! $news->desc !!}
            </div>
        </div>
    </div>
</section>


<section class="welcome-one" style="padding-top:0px;">
    <div class="container">
        <div class="section-title text-center" style="">
            <h2 class="section-title__title">Berita Lainnya </h2>
        </div>

        <div class="row">
           
            @foreach($others AS $item)
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