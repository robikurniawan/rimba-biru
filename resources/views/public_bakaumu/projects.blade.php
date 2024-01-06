@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>Our Projects</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        <div class="row">
         @foreach ($projects as $item)


            <div class="col-md-6">
                <div class="teams text-center pos-rel mb-30" style="border-radius:30px; z-index:10;">
                    <a href="{{ route('public.project_detail',enc($item->id)) }}">
                        <div class="teams__imgs pos-rel mb-30">
                            <img src="{{ asset('uploads/project/'.$item->cover.'') }}"
                                style="height:500px; object-fit:cover;" class=" img-fluid" alt="">
                        </div>
                        <div class="teams__contents pos-abl" style="bottom:5px;">
                            <div class="team__name teams__names text-left" style="padding:5px;">
                                <h6 style="line-height: 1.5; ">{{ Str::ucfirst(Str::lower($item->title)) }}</h6>
                                <p>
                                    <i class="fa fa-street-view"></i>  {{ $item->location }} <br>
                                    <i class="fa fa-handshake"></i>   {{ $item->name }} <br>
                                    <i class="fa fa-clock"></i>  <span class="badge badge-warning">    {{ $item->status }} </span> <br>

                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            </div>
            {{ $projects->links() }}
    </div>
</section>


@endsection
