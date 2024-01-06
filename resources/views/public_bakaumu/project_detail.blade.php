@extends('layouts.guest')
@section('content')

<section class="page-title-area pos-rel"
    style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/project/'.$project->cover.'') }}) no-repeat; background-size: cover;">
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
            <div class="col-md-5">
                <div class="teams text-center pos-rel mb-30" style=" z-index:10;">
                    <img src="{{ asset('uploads/project/'.$project->cover.'') }}" style="border-radius:30px; height:400px; object-fit:cover;" class=" img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7">

                <div class=" pos-abl">
                    <div class="text-left" style="padding:5px;">
                        <h2 style="line-height: 1.5; ">{{ Str::ucfirst(Str::lower($project->title)) }}</h3>
                            <p>
                                <i class="fa fa-street-view"></i> {{ $project->location }} <br>
                                <i class="fa fa-handshake"></i> {{ $project->name }} <br>
                                <i class="fa fa-clock"></i>  {{ $project->start_year }}  -  {{ $project->end_year }} <br>
                                <i class="fa fa-clock"></i> <span class="badge badge-warning"> {{ $project->status }}
                                </span> <br>
                            </p>

                        <p>
                            {!! $project->desc !!}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


@endsection
