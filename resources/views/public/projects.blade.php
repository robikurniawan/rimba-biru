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
                <li>Project</li>
            </ul>
            <h2>Project Kami</h2>
        </div>
    </div>
</section>

<section class="welcome-one">
    <div class="container">
        <div class="row">
            @foreach ($projects as $item)
            <div class="col-md-4 mb-4">
                <div class="event-two__single">
                    <div class="event-two__img-box">
                        <div class="event-two__img">
                            <img src="{{ asset('uploads/project/'.$item->cover.'') }}" style="height: 500px; object-fit:cover; width:100%; "  alt="">
                        </div>
                        <div class="event-two__content">
                            <ul class="list-unstyled event-two__meta">
                                <li><a href="#"><i class="fas fa-map-marker"></i>  {{ $item->location }} </a> </li>
                            </ul>
                            <h2 class="event-two__title"><a href="{{ route('public.project_detail',[$item->id, Str::slug($item->title) ] ) }}">{{ $item->title }}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>


@endsection