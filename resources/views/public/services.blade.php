@extends('layouts.guest')
@section('contents')
<style>
    .page-header-bg::after{
        background-image: -webkit-linear-gradient(0deg, rgb(243, 180, 44) 0%, rgb(243, 180, 44) 100%);
    }
    
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
                <li>Layanan</li>
            </ul>
            <h2>Layanan Kami</h2>
        </div>
    </div>
</section>

@foreach ($services as $item)
 
<section class="inspire-one mb-5">
    <div class="inspire-one__wrap">
        <div class="inspire-one__left">
            <div class="inspire-one__bg"
                style="background-image: url({{ asset('uploads/service/'.$item->bg.'') }});">
            </div>
        </div>
        <div class="inspire-one__right">
            <div class="inspire-one__shape-1">
                <img src="assets/images/shapes/inspire-one-shape-1.png" alt="">
            </div>
            <div class="inspire-one__content">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Layanan </span>
                    <h2 class="section-title__title"> {{ $item->name }} </h2>
                </div>
                <p class="inspire-one__text">
                    {!! $item->desc !!}
                </p>
            </div>
        </div>
    </div>
</section>

   
@endforeach



@endsection