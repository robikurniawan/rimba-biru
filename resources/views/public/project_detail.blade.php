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
            <h2>{{ $project->title }} </h2>
        </div>
    </div>

</section>

<section class="welcome-one">
    <div class="container">
        <img src="{{ asset('uploads/project/'.$project->cover.'') }}" style="width:100%; border-radius:30px; margin-top:-200px;"  alt="">
        <div class="row mt-4">
            <div class="col-md-3 mb-2">
                <div>
                    <small for="">Mitra</small>
                    <h4>
                        {{ $project->name }}
                    </h4>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div>
                    <small for="">Lokasi</small>
                    <h4>
                        {{ $project->location }}
                    </h4>
                </div>
            </div>
          
            <div class="col-md-3 mb-2">
                <div>
                    <small for="">Tahun</small>
                    <h4>
                        {{ $project->start_year }} - {{ $project->end_year }}
                    </h4>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div>
                    <small for="">Status</small>
                    <h4>
                        {{ $project->status }} 
                    </h4>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                {!! $project->desc !!}
            </div>
        </div>
    </div>
</section>


<section class="welcome-one" style="padding-top:0px;">
    <div class="container">
        <div class="section-title text-center" style="">
            <h2 class="section-title__title">Project Lainnya </h2>
        </div>

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