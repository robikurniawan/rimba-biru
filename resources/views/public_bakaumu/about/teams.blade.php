@extends('layouts.guest')
@section('content')
<style>
    .teams__imgs::before{
        background-image:  -webkit-linear-gradient(89deg, #0d3c00 0%, rgb(13 60 0 / 0%) 71%, rgba(13, 60, 0, 0.02) 99%, #0d3c00 100%);
    }
</style>
<section class="page-title-area pos-rel" style="background: linear-gradient( rgb(13 60 0), rgb(13 60 0 / 75%)  ), url({{ asset('uploads/bg/bg-bakaumu.jpeg') }}) no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="page-title text-center" style="padding-top:250px;">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="landco-future pb-95 pt-90">
    <div class="container">
        <div class="row">
                @foreach ($teams as $item)
                <div class="col-md-4">
                    <div class="teams text-center pos-rel mb-30" style="border-radius:30px; z-index:10;">
                        <a href="{{ route('public.teams_detail',[enc($item->id),Str::slug($item->name)]) }}">
                            <div class="teams__imgs pos-rel mb-30">
                                <img src="{{ asset('uploads/team/'.$item->ava.'') }}" style="height:400px; object-fit:cover;" class=" img-fluid" alt="">
                            </div>
                            <div class="teams__contents pos-abl" style="bottom:5px;">
                                <div class="team__name teams__names text-left" style="padding:5px;">
                                    <h6 style="line-height: 1.5; ">{{ Str::ucfirst(Str::lower($item->name)) }}</h6>
                                    <p>
                                         {{ $item->position }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>


@endsection
